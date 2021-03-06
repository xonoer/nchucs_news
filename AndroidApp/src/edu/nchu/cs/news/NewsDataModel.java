package edu.nchu.cs.news;

import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.HashMap;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import android.content.Context;
import android.util.Log;

public class NewsDataModel {

	private NewsDbConnector db;
	private static final String ACTIVITY_TAG = "NewsDataModel";

	public NewsDataModel(Context context) {
		db = new NewsDbConnector(context);
		del_cache_over_time();
	}

	public ArrayList<HashMap<String, String>> newslist_today()
			throws JSONException, Exception {
		String token = db.systemGetByIndex("token");
		String url = "get=today&token=" + token;
		return get_list(url);
	}

	public ArrayList<HashMap<String, String>> newslist_day(String date)
			throws JSONException, Exception {
		String url = "get=list&date=" + date;
		return get_list(url);
	}

	public ArrayList<HashMap<String, String>> newslist_cate(int rid)
			throws JSONException, Exception {
		String url = "get=list&rid=" + rid;
		return get_list(url);
	}

	public ArrayList<HashMap<String, String>> cnt_day(String date)
			throws JSONException, Exception {

		String url = "get=cnt&group=date" + date;
		JSONObject jsonObj = fetch_srv_files(url);

		if (jsonObj.getString("cntCnt").equals("0"))
			throw new Exception("No match news.");

		JSONArray jsonArray = jsonObj.getJSONArray("list");
		int cnt = Integer.parseInt(jsonObj.getString("cntCnt"));
		ArrayList<HashMap<String, String>> list = new ArrayList<HashMap<String, String>>();

		for (int i = 0; i < cnt; i++) {
			JSONObject obj = jsonArray.getJSONObject(i);

			HashMap<String, String> map = new HashMap<String, String>();
			map.put("date", obj.getString("date"));
			map.put("cnt", obj.getString("cnt"));
			list.add((HashMap<String, String>) map);
		}

		return list;
	}

	public ArrayList<HashMap<String, String>> cnt_cate(int rid)
			throws JSONException, Exception {

		String url = "get=cnt&group=rid" + rid;
		JSONObject jsonObj = fetch_srv_files(url);

		if (jsonObj.getString("cntCnt").equals("0"))
			throw new Exception("No match news.");

		JSONArray jsonArray = jsonObj.getJSONArray("list");
		int cnt = Integer.parseInt(jsonObj.getString("cntCnt"));
		ArrayList<HashMap<String, String>> list = new ArrayList<HashMap<String, String>>();

		for (int i = 0; i < cnt; i++) {
			JSONObject obj = jsonArray.getJSONObject(i);

			HashMap<String, String> map = new HashMap<String, String>();
			map.put("rid", obj.getString("rid"));
			map.put("cnt", obj.getString("cnt"));
			list.add((HashMap<String, String>) map);
		}

		return list;
	}

	public void cache_today_news() throws JSONException, Exception {

		ArrayList<HashMap<String, String>> list = newslist_today();
		int cnt = list.size();
		String nid = "0";

		for (int i = 0; i < cnt; i++) {
			HashMap<String, String> map = list.get(i);
			nid = map.get("nid");
			cache_news(nid);
		}

	}

	public HashMap<String, String> system_argu(String index, String value) {

		if (value == null) {
			HashMap<String, String> map = new HashMap<String, String>();
			map.put(index, db.systemGetByIndex(index));
			return map;
		}

		else {
			if (db.systemGetByIndex(index) == null) {
				db.systemPut(index, value);
			} else {
				db.systemSet(index, value);
			}
			return null;
		}

	}

	public HashMap<String, String> get_news(String id) {
		HashMap<String, String> map = null;
		try {
			int nid = Integer.parseInt(id);

			if (nid == 0)
				throw new Exception("Nid Can't be zero.");

			if (db.newsGetById(nid) != null) {
				map = db.newsGetById(nid);
			} else {
				map = cache_news("" + nid);
				db.newsPut(map);
			}
		} catch (Exception e) {
			Log.e(ACTIVITY_TAG, e.toString());
		}
		return map;
	}

	private ArrayList<HashMap<String, String>> get_list(String url)
			throws JSONException, Exception {

		JSONObject jsonObj = fetch_srv_files(url);

		if ((jsonObj).getString("listCnt").equals("0"))
			throw new Exception("No match news.");

		JSONArray jsonArray = jsonObj.getJSONArray("list");
		int cnt = Integer.parseInt(jsonObj.getString("listCnt"));
		ArrayList<HashMap<String, String>> list = new ArrayList<HashMap<String, String>>();

		for (int i = 0; i < cnt; i++) {
			JSONObject obj = jsonArray.getJSONObject(i);

			HashMap<String, String> map = new HashMap<String, String>();
			map.put("nid", obj.getString("nid"));
			map.put("title", obj.getString("title"));
			map.put("date", obj.getString("news_t"));

			list.add((HashMap<String, String>) map);
		}

		return list;
	}

	private HashMap<String, String> cache_news(String nid) {
		HashMap<String, String> map = new HashMap<String, String>();
		try {
			String url = "get=news&nid=" + nid;
			JSONObject jsonObj = fetch_srv_files(url);

			if (jsonObj.getString("newsCnt").equals("0"))
				throw new Exception("No match news.");

			JSONArray jsonArray = jsonObj.getJSONArray("news");
			JSONObject obj = jsonArray.getJSONObject(0);

			map.put("nid", obj.getString("nid"));
			map.put("title", obj.getString("title"));
			map.put("article", obj.getString("article"));
			map.put("news_t", obj.getString("news_t"));
			map.put("url", obj.getString("url"));

		} catch (Exception e) {
			Log.e(ACTIVITY_TAG, e.toString());
		}
		return map;
	}

	private void del_cache_over_time() {
		int days = Integer.parseInt(db.systemGetByIndex("cache_exist_time"));
		ArrayList<String> id_arr = db.getOverTimeNewsId(days);

		for (int i = 0; i < id_arr.size(); i++) {
			db.newsDelById(id_arr.get(i));
		}

	}

	private JSONObject fetch_srv_files(String api_url) {

		JSONObject jsonObject = null;
		try {
			String jsonHtml = getUriContent(api_url);

			if (jsonHtml.length() == 0)
				throw new Exception("Server didn't send json data.");

			jsonObject = new JSONObject(jsonHtml);

			if (!jsonObject.isNull("error"))
				throw new Exception("Server Error.");

		} catch (Exception e) {
			Log.e(ACTIVITY_TAG, e.toString());
		}
		return jsonObject;
	}

	private static String getUriContent(String uri) throws Exception {
		try {
			HttpClient client = new DefaultHttpClient();
			HttpGet httpGet = new HttpGet(uri);
			HttpResponse response = client.execute(httpGet);
			InputStream ips = response.getEntity().getContent();
			BufferedReader buf = new BufferedReader(new InputStreamReader(ips,
					"UTF-8"));

			StringBuilder sb = new StringBuilder();
			String s;
			while (true) {
				s = buf.readLine();
				if (s == null)
					break;
				sb.append(s);
			}
			buf.close();
			ips.close();
			return sb.toString();
		} finally {
			// any cleanup code...
		}
	}

}

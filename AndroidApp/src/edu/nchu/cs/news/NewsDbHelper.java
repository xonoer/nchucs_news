package edu.nchu.cs.news;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteDatabase.CursorFactory;
import android.database.sqlite.SQLiteOpenHelper;

public class NewsDbHelper extends SQLiteOpenHelper {

	public String sCreateTableCommand;
	
	public NewsDbHelper(Context context, String name, CursorFactory factory, int version) {
		super(context, name, factory, version);
		sCreateTableCommand="";
	}

	@Override
	public void onCreate(SQLiteDatabase db) {
		if (sCreateTableCommand == null || sCreateTableCommand.length() == 0 || sCreateTableCommand.equals("") ) {
			return;
		}
		db.execSQL(sCreateTableCommand);
	}

	@Override
	public void onUpgrade(SQLiteDatabase db, int oldVer, int newVer) {
		// TODO Auto-generated method stub

	}

}

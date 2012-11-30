<?php
	include('include.php');
	/*
		term: select `wid`,sum(`cnt`) from `news2word` where `nid` in (2902,2904,2954,3493) group by `wid`
		
		array_keys();
		count();
		sort();  rsort();  ksort();  krsort();
	*//*
	data->uid
		  cid->term
			   freq
			*/
	$data = array(
		'1' => array(  
			'2' => array(54 => 1, 60 => 1, 67 => 1, 105 => 1, 177 => 1, 213 => 2, 263 => 1, 270 => 1, 290 => 2, 294 => 1, 322 => 2, 336 => 2, 347 => 1, 348 => 1, 388 => 1, 410 => 5,457 => 2, 475 => 1, 506 => 1, 539 => 2, 567 => 5, 587 => 1, 628 => 2, 634 => 1, 735 => 1, 743 => 2, 785 => 4, 831 => 1, 860 => 13, 914 => 1, 949 => 2, 963 => 1, 1045 => 1, 1085 => 1, 1121 => 1, 1129 => 5, 1130 => 5, 1131 => 4, 1132 => 3, 1133 => 2, 1134 => 2, 1135 => 2, 1136 => 2, 1137 => 2, 1138 => 2, 1139 => 2, 1140 => 2, 1141 => 2, 1142 => 1, 1143 => 1, 1144 => 1, 1145 => 1, 1146 => 1, 1147 => 1, 1148 => 1, 1149 => 1, 1150 => 1, 1151 => 1, 1152 => 1, 1153 => 1, 1154 => 1, 1155 => 1, 1156 => 1, 1157=> 1, 1158 => 1, 1159 => 1, 1160 => 1, 1161 => 1, 1162 => 1, 1163 => 1, 1164 => 1, 1165 => 1, 1166 => 1, 1167 => 1, 1168 => 1, 1169 => 1, 1170 => 1, 1171 => 1, 1172 => 1, 1173 => 1, 1174 => 1, 1175 => 1, 1176 => 1, 1177 => 1, 1178 => 1, 1179 => 1, 1180 => 1, 1181 => 1, 1182 => 1, 1183 => 1, 1184 => 1, 1185 => 1, 1186 => 1, 1187 => 1, 1188 => 1, 1189 => 1, 1190 => 1, 1191 => 1, 1192 => 1, 1193 => 1, 1194 => 1, 1195 => 1, 1196 => 1, 1197 => 1, 1198 => 1, 1199 => 1, 1200 => 1, 1201 => 1, 1202 => 1, 1203 => 1, 1204 => 1, 1205 => 1, 1206 => 1, 1207 => 1, 1208 => 1, 1209 => 1, 1210 => 1),
			'14' => array(29 => 4, 38 => 1, 105 => 2, 214 => 1, 275 => 2, 344 => 1, 620 => 5, 790 => 1, 891 => 2, 1801 => 1, 2184 => 2, 2642 => 1, 2656 => 1, 2676 => 1, 3500 => 3, 5787 => 1, 8844 => 1, 16908 => 1, 17410 => 2, 17753 => 5, 20339 => 2, 31867 => 5, 31868 => 2, 31869 => 1, 31870 => 1),
			'34' => array(29 => 1, 38 => 2, 46 => 1, 53 => 1, 75 => 1, 90 => 1, 181 => 1, 251 => 3, 290 => 2, 293 => 1, 376 => 1, 421 => 1, 461 => 1, 472 => 1, 503 => 1, 513 => 3, 550 => 5, 551 => 4, 636 => 4, 734 => 1, 741 => 1, 772 => 5, 775 => 1, 806 => 1, 921 => 6, 929 => 1, 952 => 5, 1128 => 1, 1406 => 2, 1414 => 1, 1494 => 1, 1659 => 1, 1680 => 1, 1830 => 2, 1852 => 2, 2350 => 2, 2372 => 2, 2508 => 1, 3146 => 1, 3430 => 3, 3554 => 2, 3736 => 20, 3777 => 3, 3835 => 1, 3897 => 1, 4021 => 2, 4036 => 1, 4137 => 1, 4356 => 5, 4358 => 1, 4796 => 1, 5351 => 4, 5871 => 1, 6702 => 1, 7354 => 7, 7571 => 1, 7812 => 2, 7917 => 1, 8133 => 1, 8419 => 2, 8877 => 1, 8959 => 3, 8977 => 1, 9038 => 1, 9051 => 2, 9077 => 2, 9200 => 2, 9373 => 2, 9376 => 1, 10235 => 2, 10499 => 2, 11138 => 1, 11719 => 1, 11872 => 2, 12332 => 1, 12337 => 1, 12422 => 1, 12424 => 3, 12428 => 4, 12430 => 2, 12582 => 4, 12673 => 6, 12710 => 7, 12728 => 1, 12751 => 1, 12759 => 1, 12788 => 2, 12809 => 1, 12943 => 1, 13045 => 1, 14039 => 5, 14681 => 1, 14683 => 2, 14971 => 2, 15019 => 2, 15124 => 2, 16335 => 2, 20175 => 1, 20533 => 1, 21836 => 1, 23951 => 2, 24838 => 1, 25102 => 2, 26452 => 1, 31876 => 2, 31980 => 14, 31981 => 6, 31982 => 3, 31983 => 3, 31984 => 3, 31985 => 2, 31986 => 1, 31987 => 1, 31988 => 1, 31989 => 1, 31990 => 1),
			'41' => array(29 => 2, 181 => 1, 215 => 2, 251 => 1, 290 => 3, 293 => 1, 316 => 1, 331 => 1, 372 => 1, 377 => 1, 399 => 1, 461 => 1, 485 => 2, 497 => 1, 550 => 2, 551 =>4, 680 => 1, 734 => 2, 762 => 1, 775 => 1, 921 => 5, 952 => 6, 1121 => 2, 1128 => 4, 1129 => 1, 1304 => 1, 1359 => 1, 1406 => 3, 1494 => 1, 1639 => 1, 1659 => 1, 1840 => 2, 1852 => 1, 1870 => 1, 2053 => 1, 2307 => 1, 2345 => 1, 2432 => 1, 2437 => 2, 2719 => 1, 2752 => 1, 3407 => 1, 3580 => 1, 3736 => 14, 3835 => 1, 3891 => 1, 3963 => 1, 4021 => 2, 4036 => 1, 4127 => 4, 4137 => 1, 5136 => 5, 5323 => 3, 5367 => 1, 5514 => 1, 5692 => 1, 5845 => 5, 5874 => 1, 5966 => 1, 7110 => 3, 7502 => 2, 8093 => 1, 8877 => 1, 9077 => 1, 9078 => 1, 9085 => 2, 9166 => 1, 9713 => 1, 10403 => 1, 11872 => 1, 11974 => 1, 12092 => 1, 12337 => 1, 12673 => 9, 12679 => 1, 12681 => 1, 12813 => 1, 13113 => 1, 13456 => 10, 14510 => 1, 14717 => 2, 14760 => 1, 15940 => 1, 16769 => 1, 26452 => 1, 31923 => 2, 31924 => 2, 31925 => 1, 31926 => 1, 31927 => 1, 31928 => 1, 31929 => 1, 31930 => 1),			
			'1000' => array(9 => 1, 48 => 2, 105 => 1, 107 => 1, 127 => 1, 152 => 1, 158 => 1, 159 => 1, 204 => 3, 213 => 1, 217 => 1, 263 => 1, 269 => 1, 271 => 3, 275 => 2, 292 => 4, 295 => 1, 298 => 1, 307 => 1, 318 => 3, 323 => 1, 330 => 1, 349 => 1, 351 => 2, 352 => 1, 358 => 1, 386 => 2, 388 => 1, 392 => 4, 421 => 2, 452 => 1, 453 => 3, 483 => 6, 485 => 1, 496 => 1, 498 => 1, 499 => 2, 543 => 2, 567 => 1, 575 => 4, 584 => 5, 591 => 1, 592 => 1, 615 => 1, 617 => 1, 618 => 1, 629 => 1, 656 => 1, 659 => 1, 667 => 1, 712 => 1, 729 => 1, 734 => 1, 739 => 3, 751 => 1, 770 => 1, 774 => 1, 807 => 1, 831 => 2, 853 => 1, 855 => 5, 859 => 1, 937 => 3, 953 => 1, 1121 => 2, 1247 => 1, 1355 => 1, 1379 => 2, 1542 => 1, 1555 => 6, 1568 => 1, 1679 => 2, 1685 => 1, 1687 => 1, 1688 => 2, 1716 => 1, 1754 => 1, 1780 => 1, 1795 => 1, 1801 => 1, 1947 => 1, 1953 => 3, 1972 => 3, 2051 => 1, 2130 => 1, 2203 => 2, 2260 => 1, 2330 => 1, 2373 => 1, 2374 => 1, 2464 => 1, 2568 => 1, 2606 => 1, 2644 => 1, 2869 => 1, 2873 => 1, 3736 => 6, 3763 => 1, 3808 => 1, 3947 => 1, 4012 => 1, 4019 => 1, 4021 => 4, 4036 => 2, 4045 => 1, 4054 => 1, 4057 => 1, 4171 => 1, 4198 => 1, 4204 => 1, 4230 => 1, 4651 => 2, 4687 => 1, 4699 => 3, 4992 => 1, 5031 => 4, 5262 => 1, 5292 => 2, 5351 => 2, 5384 => 1, 5848 => 1, 6357 => 2, 7239 => 1, 7395 => 1, 8009 => 1, 8225 => 1, 8492 => 1, 8496 => 1, 8969 => 7, 9014 => 1, 9351 => 1, 9736 => 1, 9926 => 9, 10320 => 1, 11042 => 1, 11559 => 1, 11861 => 2, 12337 => 1, 12424 => 1, 12673 => 5, 12724 => 2, 12805 => 2, 12806 => 4, 12807 => 1, 12829 => 1, 12992 => 1, 12997 => 1, 13033 => 1, 14089 => 3, 15046 => 2, 15856 => 1, 16109 => 1, 16223 => 2, 16541 => 1, 19453 => 1, 20804 => 1, 21695 => 1, 23214 => 2, 23929 => 1, 24043 => 1, 24652 => 1, 25854 => 1, 27763 => 3, 27764 => 1, 27765 => 1, 27766 => 1, 27767 => 1, 27768 => 1, 27770 => 12, 27771 => 2, 27772 => 2, 27773 => 2, 27774 => 2, 27775 => 1, 27776 => 1, 27777 => 1, 27778 => 1, 27779 => 1, 27780 => 1, 28002 => 1, 28003 => 1, 28004 => 1, 31811 => 5),
		),
		'2' => array(  
			'2' => array(54 => 1, 60 => 1, 67 => 1, 105 => 1, 177 => 1, 213 => 2, 263 => 1, 270 => 1, 290 => 2, 294 => 1, 322 => 2, 336 => 2, 347 => 1, 348 => 1, 388 => 1, 410 => 5,457 => 2, 475 => 1, 506 => 1, 539 => 2, 567 => 5, 587 => 1, 628 => 2, 634 => 1, 735 => 1, 743 => 2, 785 => 4, 831 => 1, 860 => 13, 914 => 1, 949 => 2, 963 => 1, 1045 => 1, 1085 => 1, 1121 => 1, 1129 => 5, 1130 => 5, 1131 => 4, 1132 => 3, 1133 => 2, 1134 => 2, 1135 => 2, 1136 => 2, 1137 => 2, 1138 => 2, 1139 => 2, 1140 => 2, 1141 => 2, 1142 => 1, 1143 => 1, 1144 => 1, 1145 => 1, 1146 => 1, 1147 => 1, 1148 => 1, 1149 => 1, 1150 => 1, 1151 => 1, 1152 => 1, 1153 => 1, 1154 => 1, 1155 => 1, 1156 => 1, 1157=> 1, 1158 => 1, 1159 => 1, 1160 => 1, 1161 => 1, 1162 => 1, 1163 => 1, 1164 => 1, 1165 => 1, 1166 => 1, 1167 => 1, 1168 => 1, 1169 => 1, 1170 => 1, 1171 => 1, 1172 => 1, 1173 => 1, 1174 => 1, 1175 => 1, 1176 => 1, 1177 => 1, 1178 => 1, 1179 => 1, 1180 => 1, 1181 => 1, 1182 => 1, 1183 => 1, 1184 => 1, 1185 => 1, 1186 => 1, 1187 => 1, 1188 => 1, 1189 => 1, 1190 => 1, 1191 => 1, 1192 => 1, 1193 => 1, 1194 => 1, 1195 => 1, 1196 => 1, 1197 => 1, 1198 => 1, 1199 => 1, 1200 => 1, 1201 => 1, 1202 => 1, 1203 => 1, 1204 => 1, 1205 => 1, 1206 => 1, 1207 => 1, 1208 => 1, 1209 => 1, 1210 => 1),
			'14' => array(29 => 4, 38 => 1, 105 => 2, 214 => 1, 275 => 2, 344 => 1, 620 => 5, 790 => 1, 891 => 2, 1801 => 1, 2184 => 2, 2642 => 1, 2656 => 1, 2676 => 1, 3500 => 3, 5787 => 1, 8844 => 1, 16908 => 1, 17410 => 2, 17753 => 5, 20339 => 2, 31867 => 5, 31868 => 2, 31869 => 1, 31870 => 1),
			'34' => array(29 => 1, 38 => 2, 46 => 1, 53 => 1, 75 => 1, 90 => 1, 181 => 1, 251 => 3, 290 => 2, 293 => 1, 376 => 1, 421 => 1, 461 => 1, 472 => 1, 503 => 1, 513 => 3, 550 => 5, 551 => 4, 636 => 4, 734 => 1, 741 => 1, 772 => 5, 775 => 1, 806 => 1, 921 => 6, 929 => 1, 952 => 5, 1128 => 1, 1406 => 2, 1414 => 1, 1494 => 1, 1659 => 1, 1680 => 1, 1830 => 2, 1852 => 2, 2350 => 2, 2372 => 2, 2508 => 1, 3146 => 1, 3430 => 3, 3554 => 2, 3736 => 20, 3777 => 3, 3835 => 1, 3897 => 1, 4021 => 2, 4036 => 1, 4137 => 1, 4356 => 5, 4358 => 1, 4796 => 1, 5351 => 4, 5871 => 1, 6702 => 1, 7354 => 7, 7571 => 1, 7812 => 2, 7917 => 1, 8133 => 1, 8419 => 2, 8877 => 1, 8959 => 3, 8977 => 1, 9038 => 1, 9051 => 2, 9077 => 2, 9200 => 2, 9373 => 2, 9376 => 1, 10235 => 2, 10499 => 2, 11138 => 1, 11719 => 1, 11872 => 2, 12332 => 1, 12337 => 1, 12422 => 1, 12424 => 3, 12428 => 4, 12430 => 2, 12582 => 4, 12673 => 6, 12710 => 7, 12728 => 1, 12751 => 1, 12759 => 1, 12788 => 2, 12809 => 1, 12943 => 1, 13045 => 1, 14039 => 5, 14681 => 1, 14683 => 2, 14971 => 2, 15019 => 2, 15124 => 2, 16335 => 2, 20175 => 1, 20533 => 1, 21836 => 1, 23951 => 2, 24838 => 1, 25102 => 2, 26452 => 1, 31876 => 2, 31980 => 14, 31981 => 6, 31982 => 3, 31983 => 3, 31984 => 3, 31985 => 2, 31986 => 1, 31987 => 1, 31988 => 1, 31989 => 1, 31990 => 1),
			'1000' => array(9 => 1, 48 => 2, 105 => 1, 107 => 1, 127 => 1, 152 => 1, 158 => 1, 159 => 1, 204 => 3, 213 => 1, 217 => 1, 263 => 1, 269 => 1, 271 => 3, 275 => 2, 292 => 4, 295 => 1, 298 => 1, 307 => 1, 318 => 3, 323 => 1, 330 => 1, 349 => 1, 351 => 2, 352 => 1, 358 => 1, 386 => 2, 388 => 1, 392 => 4, 421 => 2, 452 => 1, 453 => 3, 483 => 6, 485 => 1, 496 => 1, 498 => 1, 499 => 2, 543 => 2, 567 => 1, 575 => 4, 584 => 5, 591 => 1, 592 => 1, 615 => 1, 617 => 1, 618 => 1, 629 => 1, 656 => 1, 659 => 1, 667 => 1, 712 => 1, 729 => 1, 734 => 1, 739 => 3, 751 => 1, 770 => 1, 774 => 1, 807 => 1, 831 => 2, 853 => 1, 855 => 5, 859 => 1, 937 => 3, 953 => 1, 1121 => 2, 1247 => 1, 1355 => 1, 1379 => 2, 1542 => 1, 1555 => 6, 1568 => 1, 1679 => 2, 1685 => 1, 1687 => 1, 1688 => 2, 1716 => 1, 1754 => 1, 1780 => 1, 1795 => 1, 1801 => 1, 1947 => 1, 1953 => 3, 1972 => 3, 2051 => 1, 2130 => 1, 2203 => 2, 2260 => 1, 2330 => 1, 2373 => 1, 2374 => 1, 2464 => 1, 2568 => 1, 2606 => 1, 2644 => 1, 2869 => 1, 2873 => 1, 3736 => 6, 3763 => 1, 3808 => 1, 3947 => 1, 4012 => 1, 4019 => 1, 4021 => 4, 4036 => 2, 4045 => 1, 4054 => 1, 4057 => 1, 4171 => 1, 4198 => 1, 4204 => 1, 4230 => 1, 4651 => 2, 4687 => 1, 4699 => 3, 4992 => 1, 5031 => 4, 5262 => 1, 5292 => 2, 5351 => 2, 5384 => 1, 5848 => 1, 6357 => 2, 7239 => 1, 7395 => 1, 8009 => 1, 8225 => 1, 8492 => 1, 8496 => 1, 8969 => 7, 9014 => 1, 9351 => 1, 9736 => 1, 9926 => 9, 10320 => 1, 11042 => 1, 11559 => 1, 11861 => 2, 12337 => 1, 12424 => 1, 12673 => 5, 12724 => 2, 12805 => 2, 12806 => 4, 12807 => 1, 12829 => 1, 12992 => 1, 12997 => 1, 13033 => 1, 14089 => 3, 15046 => 2, 15856 => 1, 16109 => 1, 16223 => 2, 16541 => 1, 19453 => 1, 20804 => 1, 21695 => 1, 23214 => 2, 23929 => 1, 24043 => 1, 24652 => 1, 25854 => 1, 27763 => 3, 27764 => 1, 27765 => 1, 27766 => 1, 27767 => 1, 27768 => 1, 27770 => 12, 27771 => 2, 27772 => 2, 27773 => 2, 27774 => 2, 27775 => 1, 27776 => 1, 27777 => 1, 27778 => 1, 27779 => 1, 27780 => 1, 28002 => 1, 28003 => 1, 28004 => 1, 31811 => 5),
		),
		'3' => array(  
			'2' => array(54 => 1, 60 => 1, 67 => 1, 105 => 1, 177 => 1, 213 => 2, 263 => 1, 270 => 1, 290 => 2, 294 => 1, 322 => 2, 336 => 2, 347 => 1, 348 => 1, 388 => 1, 410 => 5, 457 => 2, 475 => 1, 506 => 1, 539 => 2, 567 => 5, 587 => 1, 628 => 2, 634 => 1, 735 => 1, 743 => 2, 785 => 4, 831 => 1, 860 => 13, 914 => 1, 949 => 2, 963 => 1, 1045 => 1, 1085 => 1, 1121 => 1, 1129 => 5, 1130 => 5, 1131 => 4, 1132 => 3, 1133 => 2, 1134 => 2, 1135 => 2, 1136 => 2, 1137 => 2, 1138 => 2, 1139 => 2, 1140 => 2, 1141 => 2, 1142 => 1, 1143 => 1, 1144 => 1, 1145 => 1, 1146 => 1, 1147 => 1, 1148 => 1, 1149 => 1, 1150 => 1, 1151 => 1, 1152 => 1, 1153 => 1, 1154 => 1, 1155 => 1, 1156 => 1, 1157=> 1, 1158 => 1, 1159 => 1, 1160 => 1, 1161 => 1, 1162 => 1, 1163 => 1, 1164 => 1, 1165 => 1, 1166 => 1, 1167 => 1, 1168 => 1, 1169 => 1, 1170 => 1, 1171 => 1, 1172 => 1, 1173 => 1, 1174 => 1, 1175 => 1, 1176 => 1, 1177 => 1, 1178 => 1, 1179 => 1, 1180 => 1, 1181 => 1, 1182 => 1, 1183 => 1, 1184 => 1, 1185 => 1, 1186 => 1, 1187 => 1, 1188 => 1, 1189 => 1, 1190 => 1, 1191 => 1, 1192 => 1, 1193 => 1, 1194 => 1, 1195 => 1, 1196 => 1, 1197 => 1, 1198 => 1, 1199 => 1, 1200 => 1, 1201 => 1, 1202 => 1, 1203=> 1, 1204 => 1, 1205 => 1, 1206 => 1, 1207 => 1, 1208 => 1, 1209 => 1, 1210 => 1),
			'34' => array(29 => 1, 38 => 2, 46 => 1, 53 => 1, 75 => 1, 90 => 1, 181 => 1, 251 => 3, 290 => 2, 293 => 1, 376 => 1, 421 => 1, 461 => 1, 472 => 1, 503 => 1, 513 => 3, 550 => 5, 551 => 4, 636 => 4, 734 => 1, 741 => 1, 772 => 5, 775 => 1, 806 => 1, 921 => 6, 929 => 1, 952 => 5, 1128 => 1, 1406 => 2, 1414 => 1, 1494 => 1, 1659 => 1, 1680=> 1, 1830 => 2, 1852 => 2, 2350 => 2, 2372 => 2, 2508 => 1, 3146 => 1, 3430 => 3, 3554 => 2, 3736 => 20, 3777 => 3, 3835 => 1, 3897 => 1, 4021 => 2, 4036 => 1, 4137 =>1, 4356 => 5, 4358 => 1, 4796 => 1, 5351 => 4, 5871 => 1, 6702 => 1, 7354 => 7, 7571 => 1, 7812 => 2, 7917 => 1, 8133 => 1, 8419 => 2, 8877 => 1, 8959 => 3, 8977 => 1, 9038 => 1, 9051 => 2, 9077 => 2, 9200 => 2, 9373 => 2, 9376 => 1, 10235 => 2, 10499 => 2, 11138 => 1, 11719 => 1, 11872 => 2, 12332 => 1, 12337 => 1, 12422 => 1, 12424 => 3, 12428 => 4, 12430 => 2, 12582 => 4, 12673 => 6, 12710 => 7, 12728 => 1, 12751 => 1, 12759 => 1, 12788 => 2, 12809 => 1, 12943 => 1, 13045 => 1, 14039 => 5, 14681 => 1, 14683 => 2, 14971 => 2, 15019 => 2, 15124 => 2, 16335 => 2, 20175 => 1, 20533 => 1, 21836 => 1, 23951 => 2, 24838 => 1, 25102 => 2, 26452 => 1, 31876 => 2, 31980 => 14, 31981 => 6, 31982 => 3, 31983 => 3, 31984 => 3, 31985 => 2, 31986 => 1, 31987 => 1, 31988 => 1, 31989 => 1, 31990 => 1),
			'41' => array(29 => 2, 181 => 1, 215 => 2, 251 => 1, 290 => 3, 293 => 1, 316 => 1, 331 => 1, 372 => 1, 377 => 1, 399 => 1, 461 => 1, 485 => 2, 497 => 1, 550 => 2, 551 =>4, 680 => 1, 734 => 2, 762 => 1, 775 => 1, 921 => 5, 952 => 6, 1121 => 2, 1128 => 4, 1129 => 1, 1304 => 1, 1359 => 1, 1406 => 3, 1494 => 1, 1639 => 1, 1659 => 1, 1840 => 2, 1852 => 1, 1870 => 1, 2053 => 1, 2307 => 1, 2345 => 1, 2432 => 1, 2437 => 2, 2719 => 1, 2752 => 1, 3407 => 1, 3580 => 1, 3736 => 14, 3835 => 1, 3891 => 1, 3963 => 1, 4021 => 2, 4036 => 1, 4127 => 4, 4137 => 1, 5136 => 5, 5323 => 3, 5367 => 1, 5514 => 1, 5692 => 1, 5845 => 5, 5874 => 1, 5966 => 1, 7110 => 3, 7502 => 2, 8093 => 1, 8877 => 1, 9077 => 1, 9078 => 1, 9085 => 2, 9166 => 1, 9713 => 1, 10403 => 1, 11872 => 1, 11974 => 1, 12092 => 1, 12337 => 1, 12673 => 9, 12679 => 1, 12681 => 1, 12813 => 1, 13113 => 1, 13456 => 10, 14510 => 1, 14717 => 2, 14760 => 1, 15940 => 1, 16769 => 1, 26452 => 1, 31923 => 2, 31924 => 2, 31925 => 1, 31926 => 1, 31927 => 1, 31928 => 1, 31929 => 1, 31930 => 1),
		),
		'4' => array(  
			'2' => array(54 => 1, 60 => 1, 67 => 1, 105 => 1, 177 => 1, 213 => 2, 263 => 1, 270 => 1, 290 => 2, 294 => 1, 322 => 2, 336 => 2, 347 => 1, 348 => 1, 388 => 1, 410 => 5, 457 => 2, 475 => 1, 506 => 1, 539 => 2, 567 => 5, 587 => 1, 628 => 2, 634 => 1, 735 => 1, 743 => 2, 785 => 4, 831 => 1, 860 => 13, 914 => 1, 949 => 2, 963 => 1, 1045 => 1, 1085 => 1, 1121 => 1, 1129 => 5, 1130 => 5, 1131 => 4, 1132 => 3, 1133 => 2, 1134 => 2, 1135 => 2, 1136 => 2, 1137 => 2, 1138 => 2, 1139 => 2, 1140 => 2, 1141 => 2, 1142 => 1, 1143 => 1, 1144 => 1, 1145 => 1, 1146 => 1, 1147 => 1, 1148 => 1, 1149 => 1, 1150 => 1, 1151 => 1, 1152 => 1, 1153 => 1, 1154 => 1, 1155 => 1, 1156 => 1, 1157=> 1, 1158 => 1, 1159 => 1, 1160 => 1, 1161 => 1, 1162 => 1, 1163 => 1, 1164 => 1, 1165 => 1, 1166 => 1, 1167 => 1, 1168 => 1, 1169 => 1, 1170 => 1, 1171 => 1, 1172 => 1, 1173 => 1, 1174 => 1, 1175 => 1, 1176 => 1, 1177 => 1, 1178 => 1, 1179 => 1, 1180 => 1, 1181 => 1, 1182 => 1, 1183 => 1, 1184 => 1, 1185 => 1, 1186 => 1, 1187 => 1, 1188 => 1, 1189 => 1, 1190 => 1, 1191 => 1, 1192 => 1, 1193 => 1, 1194 => 1, 1195 => 1, 1196 => 1, 1197 => 1, 1198 => 1, 1199 => 1, 1200 => 1, 1201 => 1, 1202 => 1, 1203=> 1, 1204 => 1, 1205 => 1, 1206 => 1, 1207 => 1, 1208 => 1, 1209 => 1, 1210 => 1),
			'41' => array(29 => 2, 181 => 1, 215 => 2, 251 => 1, 290 => 3, 293 => 1, 316 => 1, 331 => 1, 372 => 1, 377 => 1, 399 => 1, 461 => 1, 485 => 2, 497 => 1, 550 => 2, 551 =>4, 680 => 1, 734 => 2, 762 => 1, 775 => 1, 921 => 5, 952 => 6, 1121 => 2, 1128 => 4, 1129 => 1, 1304 => 1, 1359 => 1, 1406 => 3, 1494 => 1, 1639 => 1, 1659 => 1, 1840 => 2, 1852 => 1, 1870 => 1, 2053 => 1, 2307 => 1, 2345 => 1, 2432 => 1, 2437 => 2, 2719 => 1, 2752 => 1, 3407 => 1, 3580 => 1, 3736 => 14, 3835 => 1, 3891 => 1, 3963 => 1, 4021 => 2, 4036 => 1, 4127 => 4, 4137 => 1, 5136 => 5, 5323 => 3, 5367 => 1, 5514 => 1, 5692 => 1, 5845 => 5, 5874 => 1, 5966 => 1, 7110 => 3, 7502 => 2, 8093 => 1, 8877 => 1, 9077 => 1, 9078 => 1, 9085 => 2, 9166 => 1, 9713 => 1, 10403 => 1, 11872 => 1, 11974 => 1, 12092 => 1, 12337 => 1, 12673 => 9, 12679 => 1, 12681 => 1, 12813 => 1, 13113 => 1, 13456 => 10, 14510 => 1, 14717 => 2, 14760 => 1, 15940 => 1, 16769 => 1, 26452 => 1, 31923 => 2, 31924 => 2, 31925 => 1, 31926 => 1, 31927 => 1, 31928 => 1, 31929 => 1, 31930 => 1),
		),
	);
	$user_termFreq=array();//存更號平方合
	$userList=array();//為了要以index定位，看能不能省去
	foreach($data as $uid => $arr_cid){
		$merge_termFreq=array();//將class的term&frequency合併
		$user=$arr_cid;
		$userList[]=$uid;
		foreach($user as $cid => $arr_termFreq){
			$termList=$arr_termFreq;
			foreach($termList as $term =>$frequency){
				$merge_termFreq=array_pad($merge_termFreq,count($merge_termFreq)+$frequency,$term);//重覆append
			}
		}
		$merge_termFreq=array_count_values($merge_termFreq);//計算次數
		foreach($merge_termFreq as $term => $frequency){
			$temp+=$frequency*$frequency;
		}
		$temp=sqrt($temp);
		$user_termFreq[$uid] =$temp;
		echo $temp;
		echo '<br />';
		$temp=0;
	}
	foreach($userList as $index => $uid){
		$arr_cid=$data[$uid];//第一人
		while($arr_cid2=$data[$userList[++$index]]){//第二人
			//Step:兩人對class的關係表
			print_r(array_keys($arr_cid));
			print_r(array_keys($arr_cid2));
			echo '<br />';
			$merge_cid=array_merge(array_keys($arr_cid),array_keys($arr_cid2));
			sort($merge_cid);
			$merge_cid=array_count_values($merge_cid);
			foreach($merge_cid as $cid => $case){
				if($case==2){//CLASS中兩人對term的關係表
					$merge_tid=array_merge(array_keys($arr_cid[$cid]),array_keys($arr_cid2[$cid]));
					sort($merge_tid);
					$merge_tid=array_count_values($merge_tid);
					foreach($merge_tid as $tid => $case){
						if($case==2){
							$similarity+=$arr_cid[$cid][$tid]*$arr_cid2[$cid][$tid];
						}
					}
				}
			}
			if($user_termFreq[$uid]*$user_termFreq[$userList[$index]]!=0){
				$similarity/=$user_termFreq[$uid]*$user_termFreq[$userList[$index]];
			}
			echo 'uid='.$uid.'跟uid='.$userList[$index].'的相似度為:';
			echo $similarity;
			echo '<br />';
			$similarity=0;
		}
		
	}
?>
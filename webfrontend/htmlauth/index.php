<html>
 <head>
  <title>Jewish date</title>
 </head>
 <body>
<?php 
$jd = gregoriantojd(date("m"),date("d"),date("Y"));
$jewishDate =  jdtojewish($jd, false);
$hebjewishDate = jdtojewish($jd, true, CAL_JEWISH_ADD_GERESHAYIM);
echo $hebjewishDate;
?>
<br>	
 <?php
/* 
version 2.0.0
*/

function isJewishLeapYear($year) {
  if ($year % 19 == 0 || $year % 19 == 3 || $year % 19 == 6 ||
      $year % 19 == 8 || $year % 19 == 11 || $year % 19 == 14 ||
      $year % 19 == 17)
    return 1;
  else
    return 0;
}

function ListhandlerLOX($jewishYear, $jewishMonth,$jewishDay, $daysinkislev){
	$today = date("Y-m-d");
	$DayOfTheWeek = date('N', strtotime($today));
	$diaspora = 1;
	$event = 0;
	$holidayFirstList = 0;
	$holidaySecondList = 0;
	$holidayThirdList = 0;
	$eventEN = "";
	$eventHE = "";
	//תשרי
    if ($jewishDay == 1 & $jewishMonth == 1){
		$eventEN = "Rosh Hashana I";
		$eventHE = "יום א דראש השנה";
		$event = 2; $holidaySecondList = 2;}
    if ($jewishDay== 2 & $jewishMonth == 1){
		$eventEN = "Rosh Hashana II";
		$eventHE = "יום ב דראש השנה";
		$event = 3; $holidaySecondList = 3;}
	if ($DayOfTheWeek == 7) {
		if ($jewishDay == 4 & $jewishMonth == 1){
			$eventEN = "Tzom Gedaliah";
			$eventHE = "צום גדליה - נדחה";
		$event = 10; $holidaySecondList = 4;}
		}
	if ($DayOfTheWeek != 6){
		if ($jewishDay== 3 & $jewishMonth== 1){
			$eventEN = "Tzom Gedaliah";
			$eventHE = "צום גדליה";
			$event = 10; $holidaySecondList = 4;}
	}
    if ($jewishDay== 9 & $jewishMonth== 1){
		$eventEN = "Erev Yom Kippur";
		$eventHE = "ערב יום כיפור";
		$event = 1; $holidaySecondList = 5;}
    if ($jewishDay== 10 & $jewishMonth== 1){
		$eventEN = "Yom Kippur (Yizkor)";
		$eventHE = "יום כיפור - יזכור";
		$event = 3; $holidaySecondList = 5;}
    if ($jewishDay== 14 & $jewishMonth == 1){
		$eventEN = "Erev Sukkot";
		$eventHE = "ערב סוכות";
		$event = 1; $holidaySecondList = 7;}
	if ($diaspora == 1){
		if ($jewishDay== 15 & $jewishMonth == 1) {
			$eventEN = "Sukkot I";
			$eventHE = "סוכות יום א";
			$event = 2; $holidaySecondList = 8;}
	}else{
		if ($jewishDay== 15 & $jewishMonth== 1 ) {
			$eventEN = "Sukkot";
			$eventHE = "סוכות";
			$event = 3; $holidaySecondList = 8;}
	}
	if ($diaspora == 1){
		if ($jewishDay== 16 & $jewishMonth== 1) {
			$eventEN = "Sukkot II";
			$eventHE = "יום ב דסוכות";
			$event = 3; $holidaySecondList = 9;}
	}else{
		if ($jewishDay== 16 & $jewishMonth == 1) {	
			$eventEN = "Chol Hamoed";
			$eventHE = "חול המועד סוכות";
			$event = 5; $holidaySecondList = 10;}
	}
    if ($jewishDay== 17 & $jewishMonth== 1){
		$eventEN = "Chol Hamoed";
		$eventHE = "חול המועד סוכות";
		$event = 5; $holidaySecondList = 10;}
    if ($jewishDay== 18 & $jewishMonth== 1){
		$eventEN = "Chol Hamoed";
		$eventHE = "חול המועד סוכות";
		$event = 5; $holidaySecondList = 10;}
    if ($jewishDay== 19 & $jewishMonth == 1){
		$eventEN = "Chol Hamoed";
		$eventHE = "חול המועד סוכות";
		$event = 5; $holidaySecondList = 10;}
    if ($jewishDay== 20 & $jewishMonth == 1){
		$eventEN = "Chol Hamoed";
		$eventHE = "חול המועד סוכות";
		$event = 5; $holidaySecondList = 10;}
    if ($jewishDay== 21 & $jewishMonth == 1){
		$eventEN = "Hoshana Raba";
		$eventHE = "הושענה רבה";
		$event = 1; $holidaySecondList = 11;}
	if ($diaspora == 0){
		if ($jewishDay== 22 & $jewishMonth== 1) {
			$eventEN = "Shemini Atzereth And Simchat Torah(Yizkor)";
			$eventHE = "שמיני עצרת ושמחת תורה - יזכור";
			$event = 3; $holidaySecondList = 13;}
	}else{
		if ($jewishDay== 22 & $jewishMonth== 1) {
			$eventEN = "Shemini Atzereth (Yizkor)";
			$eventHE = "שמיני עצרת - יזכור";
			$event = 2; $holidaySecondList = 12;}
    }
	if ($diaspora == 1){
	if($jewishDay== 23 & $jewishMonth== 1) {
        $eventEN = "Simchat Torah";
		$eventHE = "שמחת תורה";
		$event = 3; $holidaySecondList = 12;}
	}
		//חשוון
		//כסליו
    if ($jewishDay== 25 & $jewishMonth == 3){
		$eventEN = "Chanukka I";
		$eventHE = "חנוכה נר א";
		$event = 6; $holidayThirdList = 1;}
    if ($jewishDay== 26 & $jewishMonth == 3){
		$eventEN = "Chanukka II";
		$eventHE = "חנוכה נר ב";
		$event = 6; $holidayThirdList = 1;}
    if ($jewishDay== 27 & $jewishMonth== 3){
		$eventEN = "Chanukka III";
		$eventHE = "חנוכה נר ג";
		$event = 6; $holidayThirdList = 1;}
    if ($jewishDay== 28 & $jewishMonth== 3){
		$eventEN = "Chanukka IV";
		$eventHE = "חנוכה נר ד";
		$event = 6; $holidayThirdList = 1;}
    if ($jewishDay== 29 & $jewishMonth== 3){
		$eventEN = "Chanukka V";
		$eventHE = "חנוכה נר ה";
		$event = 6; $holidayThirdList = 1;}
    
    if ($daysinkislev == 30) {
		if ($jewishDay== 30 & $jewishMonth== 3){
			$eventEN = "Chanukka VI";
			$eventHE = "חנוכה נר ו";
			$event = 6; $holidayThirdList = 1;}
		if ($jewishDay== 1 & $jewishMonth== 4){
			$eventEN = "Chanukka VII";
			$eventHE = "חנוכה נר ז";
			$event = 6; $holidayThirdList = 1;}
		if ($jewishDay== 2 & $jewishMonth== 4){
			$eventEN = "Chanukka VIII";
			$eventHE = "חנוכה נר ח - זאת חנוכה";
			$event = 6; $holidayThirdList = 1;}
    }
    if ($daysinkislev == 29) {
		if ($jewishDay== 1 & $jewishMonth== 4){
			$eventEN = "Chanukka VI";
			$eventHE = "חנוכה נר ו";
			$event = 6; $holidayThirdList = 1;}
		if ($jewishDay== 2 & $jewishMonth== 4){
			$eventEN = "Chanukka VII";
			$eventHE = "חנוכה נר ז";
			$event = 6; $holidayThirdList = 1;}
		if ($jewishDay== 3 & $jewishMonth== 4){
			$eventEN = "Chanukka VIII";
			$eventHE = "חנוכה נר ח - זאת חנוכה";
			$event = 6; $holidayThirdList = 1;}
    }
	if ($jewishDay== 10 & $jewishMonth== 4){
		$eventEN = "Fast of Tevet";
		$eventHE = "עשרה בטבת";
		$event = 10; $holidayThirdList = 3;}
	//שבט
    if ($jewishDay== 15 & $jewishMonth== 5){
		$eventEN = "Tu B'Shevat";
		$eventHE = "טו בשבט";
		$event = 8;}
	//אדר ראשון
    if ($jewishDay== 14 & $jewishMonth== 6){
        $eventEN = "Purim Katan";
		$eventHE = "פורים קטן";
		$event = 8;}
    if ($jewishDay== 15 & $jewishMonth== 6){
        $eventEN = "Shushan Purim Katan";
		$eventHE = "שושן פורים קטן";
		$event = 8;}
	//אדר
	if ($DayOfTheWeek == 4 ){
		if ($jewishDay== 11 & $jewishMonth== 7){
			$eventEN = "Fast of Esther";
			$eventHE = "תענית אסתר מוקדם";		
			$event = 10; $holidayThirdList = 4;}
	}
	if ($DayOfTheWeek != 6){
		if ($jewishDay== 13 & $jewishMonth== 7){
			$eventEN = "Fast of Esther" ;
			$eventHE = "תענית אסתר";
			$event = 10; $holidayThirdList = 4;}
	}
    if ($jewishDay== 14 & $jewishMonth== 7){
		$eventEN = "Purim";
		$eventHE = "פורים";
		$event = 9; $holidayThirdList = 5;}
	if ($DayOfTheWeek != 6){
		if ($jewishDay== 15 & $jewishMonth== 7){
			$eventEN = "Shushan Purim";
			$eventHE = "שושן פורים";		
			$event = 9; $holidayThirdList = 6;}
	}
	if ($DayOfTheWeek == 6){
		if ($jewishDay== 15 & $jewishMonth== 7 ){
			$eventEN = "Purim Hameshulash";
			$eventHE = "פורים המשולש";		
			$event = 9; $holidayThirdList = 6;}	
	}
	if ($DayOfTheWeek == 7){
		if ($jewishDay== 16 & $jewishMonth== 7){
			$eventEN = "Purim Hameshulash";
			$eventHE = "פורים המשולש";		
			$event = 9; $holidayThirdList = 6;}
	}
	//ניסן
	if ($DayOfTheWeek == 4){
		if ($jewishDay== 12 & $jewishMonth== 8){
			$eventEN = "Bdikas chomets";
			$eventHE = "ליל בדיקת חמץ";
			$event = 8; $holidaySecondList = 14;}
	}
	if ($DayOfTheWeek != 5){
		if ($jewishDay== 13 & $jewishMonth== 8){
			$eventEN = "Bdikas chomets";
			$eventHE = "ליל בדיקת חמץ";
			$event = 8; $holidaySecondList = 14;}
	}
	if ($DayOfTheWeek != 6){
		if ($jewishDay== 14 & $jewishMonth== 8){
			$eventEN = "Erev Pesach";
			$eventHE = "ערב פסח - ליל הסדר";
			$event = 1;$holidayFirstList =1;}
	}
	if ($DayOfTheWeek == 5){
		if ($jewishDay== 13 & $jewishMonth== 8){
			$eventEN = "Bdikas Chometz";
			$eventHE = "יום בדיקת חמץ";
			$event = 8;$holidaySecondList =0;}
	}

	if ($DayOfTheWeek == 6){
		if ($jewishDay== 14 & $jewishMonth== 8){
			$eventEN = "Shabbes Erev Pesach";
			$eventHE = "שבת ערב פסח - ליל הסדר";
			$event = 1;$holidayFirstList =1;}
	}
	if ($diaspora == 1){
		if ($jewishDay== 15 & $jewishMonth== 8){
			$eventEN = "Pesach I";
			$eventHE = "פסח";
			$event = 2;$holidayFirstList =2;}
	}else{
		if ($jewishDay== 15 & $jewishMonth== 8){
			$eventEN = "Pesach I";
			$eventHE = "פסח";
			$event = 3;$holidayFirstList =2;}
	}
	if ($diaspora == 1){
		if ($jewishDay== 16 & $jewishMonth== 8){
			$eventEN = "Pesach II";
			$eventHE = "יום שני של פסח";
			$event = 3;$holidayFirstList =3;}
	}else{
		if ($jewishDay== 16 & $jewishMonth== 8){
			$eventEN = "Chol Hamoed";
			$eventHE = "חול המועד פסח";
			$event = 4;$holidayFirstList =4;}
	}
    if ($jewishDay== 17 & $jewishMonth== 8){
		$eventEN = "Chol Hamoed";
		$eventHE = "חול המועד פסח";
		$event = 4;$holidayFirstList =4;}		
    if ($jewishDay== 18 & $jewishMonth== 8){
		$eventEN = "Chol Hamoed";
		$eventHE = "חול המועד פסח";
		$event = 4;$holidayFirstList =4;}
    if ($jewishDay== 19 & $jewishMonth== 8){
		$eventEN = "Chol Hamoed";
		$eventHE = "חול המועד פסח";
		$event = 4;$holidayFirstList =4;}		
    if ($jewishDay== 20 & $jewishMonth== 8){
		$eventEN = "Chol Hamoed, Erev Shvihy shel Pesach";
		$eventHE = "ערב שביעי של פסח";
		$event = 1;$holidayFirstList =5;}
	if ($diaspora == 0){		
		if ($jewishDay== 21 & $jewishMonth== 8) {
			$eventEN = "Shvihy shel Pesach (Yizkor)";
			$eventHE = "שביעי של פסח - יזכור";
			$event = 3;$holidayFirstList =6;}
	}else{
		if ($jewishDay== 21 & $jewishMonth== 8) {
			$eventEN = "Shvihy shel Pesach";
			$eventHE = "שביעי של פסח";
			$event = 2;$holidayFirstList =6;}
		if ($jewishDay== 22 & $jewishMonth== 8) {
			$eventEN = "Ahron shel Pesach (Yizkor)";
			$eventHE = "אחרון של פסח - יזכור";
			$event = 3;$holidayFirstList =7;}
	}
	//אייר
    if ($jewishDay== 14 & $jewishMonth== 9){
		$eventEN = "Pesach Sheni";
		$eventHE = "פסח שני";
		$event = 8;}
	if($jewishDay== 17 & $jewishMonth== 9){
		$eventEN = "Erev Lag BaOmer";
		$eventHE = "ערב לג בעומר";
		$event = 7;$holidayFirstList = 16;}
    if($jewishDay== 18 & $jewishMonth== 9){
		$eventEN = "Lag BaOmer";
		$eventHE = "לג בעומר";
		$event = 7;$holidayFirstList = 8;}
	//סיון
	
    if ($jewishDay== 5 & $jewishMonth== 10){
		$eventEN = "Erev Shavuot";
		$eventHE = "ערב שבועות";
		$event = 1;$holidayFirstList =9;}
		
	if ($diaspora == 1){
		if ($jewishDay== 6 & $jewishMonth== 10) {
			$eventEN = "Shavuot I";
			$event = 2;$holidayFirstList =10;
			$eventHE = "שבועות -יזכור";}
		if ($jewishDay== 7 & $jewishMonth== 10) {
			$eventEN = "Shavuot II (Yizkor)";
			$eventHE = "שבועות -יזכור";
			$event = 3;$holidayFirstList =11;}
	}else {
		if ($jewishDay== 6 & $jewishMonth== 10) {
			$eventEN = "Shavuot I (Yizkor)";
			$eventHE = "שבועות -יזכור";
			$event = 3;$holidayFirstList =10;}
		}
    
	//תמוז
	if ($DayOfTheWeek == 7){
		if ($jewishDay== 18 & $jewishMonth== 11){
			$eventEN = "Fast of Tammuz";
			$eventHE = "שבעה עשר בתמוז - נדחה";
			$event = 10;$holidaySecondList =15;}
	}
	if ($DayOfTheWeek != 6){
		if ($jewishDay== 17 & $jewishMonth== 11){
			$eventEN = "Fast of Tammuz";
			$eventHE = "שבעה עשר בתמוז";
			$event = 10;$holidayFirstList =12;}
	}
	//אב
	if ($DayOfTheWeek != 5){
		if ($jewishDay== 8 & $jewishMonth== 12){
			$eventEN = "Erev Fast of Av";
			$eventHE = "ערב תשעה באב";
			$event = 7;$holidayFirstList =13;}
	}
	if ($DayOfTheWeek == 6){
		if ($jewishDay== 9 & $jewishMonth== 12){
			$eventEN = "Shabbes erev Fast of Av";
			$eventHE = "שבת שחל בו תשעה באב";
			$event = 7;$holidayFirstList =15;} 
	}
	if ($DayOfTheWeek == 6){
		if ($jewishDay== 8 & $jewishMonth== 12){
			$eventEN = "Shabbes erev Fast of Av";
			$eventHE = "שבת ערב תשעה באב";
			$event = 7;$holidayFirstList =15;} 
	}	
	if ($DayOfTheWeek == 7){	
		if ($jewishDay== 10 & $jewishMonth== 12){
			$eventEN = "Fast of Av";
			$eventHE = "תשעה באב -נדחה";
			$event = 10;$holidayFirstList =14;}
	}
	if ($DayOfTheWeek != 6){
		if ($jewishDay== 9 & $jewishMonth== 12){
			$eventEN = "Fast of Av";
			$eventHE = "תשעה באב";
			$event = 10;$holidayFirstList =14;}
	}
    if ($jewishDay== 15 & $jewishMonth== 12){
		$eventEN = "Tu B'Av";
		$eventHE = "חמישה עשר באב";
		$event = 8;}
	//אלול
    if ($jewishDay== 29 & $jewishMonth== 13){
		$eventEN = "Erev Rosh Hashana";
		$eventHE = "ערב ראש השנה";
		$event = 1;$holidaySecondList =1;} 

	//כללי
	if ($diaspora == 0){
		if ($event == 2 & $holidaySecondList != 2){
			$event = 3;} 
	}// יום אחרון בארץ
	if ($event == 3 & $DayOfTheWeek == 5){
		$event = 2;}// יום אמצעי כשחל בשבת
	
	if ($holidayThirdList == 1 & $DayOfTheWeek == 5){
		$holidayThirdList = 2;
		$eventEN = "Erev Sahbbes chnuka";
		$eventHE = "ערב שבת חנוכה";}
	//echo "Status: $event List A: $holidayFirstList List B: $holidaySecondList List C: $holidayThirdList  Name Holiday: $eventEN : $eventHE";
	return "Status: $event List A: $holidayFirstList List B: $holidaySecondList List C: $holidayThirdList  Name Holiday: $eventEN : $eventHE";
}


	
$jd = gregoriantojd(date("m"),date("d"),date("Y"));
$jewishDate =  jdtojewish($jd, false);
//$hebjewishDate = jdtojewish($jd, true, CAL_JEWISH_ADD_GERESHAYIM);
//echo $hebjewishDate
list($jewishMonth, $jewishDay, $jewishYear) = explode('/', $jewishDate);
$daysinkislev = cal_days_in_month(CAL_JEWISH, 3, $jewishYear);
$leap =  isJewishLeapYear( $jewishYear);
$result = ListhandlerLOX($jewishYear, $jewishMonth, $jewishDay, $daysinkislev);
echo "Day: $jewishDay Month: $jewishMonth Year: $jewishYear DaysOfKislev: $daysinkislev LeapYear: $leap  $result";
$jewishDay = intval($jewishDay);
$jewishMonth  = intval($jewishMonth);
$jewishYear = intval($jewishYear);
$daysinkislev= intval($daysinkislev);
$leap = intval($leap);
//$list = array("Day"=> $jewishDay, "Month"=>$jewishMonth, "Year"=>$jewishYear, "DaysOfKislev"=>$daysinkislev, "LeapYear"=>$leap, ""=>$result);
//echo json_encode($list);
?>
 </body>
</html>

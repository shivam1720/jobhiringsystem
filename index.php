<?php
session_start();
if($_SESSION['email'])
{
    include('Connection/cn.php');
    if(isset($_POST['submit']))
    {
        $full_name=$_POST['full_name'];
        $last_name=$_POST['last_name'];
        $dob=$_POST['birthDate_day'].'/'.$_POST['birthDate_month'].'/'.$_POST['birthDate_year'];
        $gender=$_POST['gender'];
        $whatDo=implode(',',$_POST['whatDo']);
        $experience=$_POST['experience'];
        $personalSites=$_POST['personalSites'];
        $areYou=$_POST['areYou'];
        $immediateAnd=$_POST['immediateAnd'];
        $whatAre=$_POST['whatAre'];
        $sitesSamples=$_POST['sitesSamples'];
        $listYour=$_POST['listYour'];
        $location=$_POST['location'];
        $lastFinished=$_POST['lastFinished'];
        $whatProject=$_POST['whatProject'];
        $projectRelease=$_POST['projectRelease_day'].'/'.$_POST['projectRelease_month'].'/'.$_POST['projectRelease_year'];
        $email=$_POST['email'];
        $phoneNumber=$_POST['phoneNumber'];
        $cv=$_FILES['cv']['name'];

         $q="insert into registration(`full_name`,`last_name`,`dob`,`gender`,`whatDo`,`experience`,`personalSites`,`areYou`,`immediateAnd`,`whatAre`,`sitesSamples`,`listYour`,`location`,`lastFinished`,`whatProject`,`projectRelease`,`email`,`phoneNumber`,`cv`) values ('$full_name','$last_name','$dob','$gender','$whatDo','$experience','$personalSites','$areYou','$immediateAnd','$whatAre','$sitesSamples','$listYour','$location','$lastFinished','$whatProject','$projectRelease','$email','$phoneNumber','$cv')";
        $se=mysqli_query($cn,$q);

        move_uploaded_file($_FILES['cv']['tmp_name'],'cv/'.$cv);
        
        header('location: index.php');

         
    }
?>
<html class="supernova">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
    <meta name="HandheldFriendly" content="true" />

    <title>Resume</title>
    <link href="css/formCss4588.css?3.3.12797" rel="stylesheet" type="text/css" />
    <link type="text/css" media="print" rel="stylesheet" href="css/printForm4588.css?3.3.12797" />
    <link type="text/css" rel="stylesheet" href="css/nova4588.css?3.3.12797" />
    <link type="text/css" rel="stylesheet" href="css/54be8f18700cc4e0368b45680a30.css?themeRevisionID=5cf3a144544a540f293a76a1" />
    <style type="text/css">
        .form-label-left {
            width: 150px;
        }
        
        .form-line {
            padding-top: 2px;
            padding-bottom: 2px;
        }
        
        .form-label-right {
            width: 150px;
        }
        
        body,
        html {
            margin: 0;
            padding: 0;
            background: rgb(153, 153, 153);
        }
        
        .form-all {
            margin: 0px auto;
            padding-top: 0px;
            width: 690px;
            color: #555 !important;
            font-family: 'Coda';
            font-size: 14px;
        }
    </style>

    <style type="text/css" id="form-designer-style">

        .form-all {
            font-family: "Verdana", sans-serif;
        }
        
        .form-all .qq-upload-button,
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print {
            font-family: "Verdana", sans-serif;
        }
        
        .form-all .form-pagebreak-back-container,
        .form-all .form-pagebreak-next-container {
            font-family: "Verdana", sans-serif;
        }
        
        .form-header-group {
            font-family: "Verdana", sans-serif;
        }
        
        .form-label {
            font-family: "Verdana", sans-serif;
        }
        
        .form-label.form-label-auto {
            display: inline-block;
            float: left;
            text-align: left;
        }
        
        .form-line {
            margin-top: 2px;
            margin-bottom: 2px;
        }
        
        .form-all {
            width: 650px;
        }
        
        .form-label-left,
        .form-label-right,
        .form-label-left.form-label-auto,
        .form-label-right.form-label-auto {
            width: 150px;
        }
        
        .form-all {
            font-size: 10pxpx
        }
        
        .form-all .qq-upload-button,
        .form-all .qq-upload-button,
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print {
            font-size: 10pxpx
        }
        
        .form-all .form-pagebreak-back-container,
        .form-all .form-pagebreak-next-container {
            font-size: 10pxpx
        }
        
        .supernova .form-all,
        .form-all {
            background-color: rgb(153, 153, 153);
            border: 1px solid transparent;
        }
        
        .form-all {
            color: #000000;
        }
        
        .form-header-group .form-header {
            color: #000000;
        }
        
        .form-header-group .form-subHeader {
            color: #000000;
        }
        
        .form-label-top,
        .form-label-left,
        .form-label-right,
        .form-html,
        .form-checkbox-item label,
        .form-radio-item label {
            color: #000000;
        }
        
        .form-sub-label {
            color: #1a1a1a;
        }
        
        .supernova {
            background-color: undefined;
        }
        
        .supernova body {
            background: transparent;
        }
        
        .form-textbox,
        .form-textarea,
        .form-radio-other-input,
        .form-checkbox-other-input,
        .form-captcha input,
        .form-spinner input {
            background-color: undefined;
        }
        
        .supernova {
            background-image: none;
        }
        
        #stage {
            background-image: none;
        }
        
        .form-all {
            background-image: url("images/brushed.png");
            background-repeat: repeat;
            background-attachment: scroll;
            background-position: center top;
        }
        
        .ie-8 .form-all:before {
            display: none;
        }
        
        .ie-8 {
            margin-top: auto;
            margin-top: initial;
        }
    </style>

    <link type="text/css" rel="stylesheet" href="css/form-submit-button-black_glass4588.css?3.3.12797" />
    <script src="js/punycode.min.js"></script>
    <script src="js/prototype.forms.js" type="text/javascript"></script>
    <script src="js/jotform.forms4588.js?3.3.12797" type="text/javascript"></script>
  
</head>

<body style="background-image: url('images/back.jpg')">
    <form >
    <a href="logout.php" class="form-submit-button form-submit-button-black_glass" style="float:right; ">
              Logout
            </a>   
    <!-- <div style="float:right; margin-right:300px;">
            
        Upload File (CSV) :- <input type="file" name="filescsv">
        
        <button id="input_2" type="submit" class="form-submit-button form-submit-button-black_glass" data-component="button">
              Submit
            </button>
    </div> -->
    </form>
    <form class="jotform-form" method="post" id="92552447345461" enctype="multipart/form-data" accept-charset="utf-8">
        <input type="hidden" name="formID" value="92552447345461" />
        <input type="hidden" id="JWTContainer" value="" />
        <input type="hidden" id="cardinalOrderNumber" value="" />
        <div role="main" class="form-all">
            <ul class="form-section page-section">
                <li id="cid_1" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group ">
                        <div class="header-text httal htvam">
                            <h2 id="header_1" class="form-header" data-component="header">
                                Resume
                            </h2>
                            <div id="subHeader_1" class="form-subHeader">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_fullname" id="id_33">
                    <label class="form-label form-label-left form-label-auto" id="label_33" for="first_33">
          Full Name
          <span class="form-required">
            *
          </span>
        </label>
                    <div id="cid_33" class="form-input jf-required">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" id="first_33" name="full_name" class="form-textbox validate[required]" size="10" value="" data-component="first" aria-labelledby="label_33 sublabel_33_first" required="" />
              <label class="form-sub-label" for="first_33" id="sublabel_33_first" style="min-height:13px"> First Name </label>
            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" id="last_33" name="last_name" class="form-textbox validate[required]" size="15" value="" data-component="last" aria-labelledby="label_33 sublabel_33_last" required="" />
              <label class="form-sub-label" for="last_33" id="sublabel_33_last" style="min-height:13px"> Last Name </label>
            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_birthdate" id="id_18">
                    <label class="form-label form-label-left form-label-auto" id="label_18" for="input_18">
          Birth Date
          <span class="form-required">
            *
          </span>
        </label>
                    <div id="cid_18" class="form-input jf-required">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="birthDate_month" id="input_18_month" class="form-dropdown validate[required]" data-component="birthdate-month">
                <option>  </option>
                <option value="January"> January </option>
                <option value="February"> February </option>
                <option value="March"> March </option>
                <option value="April"> April </option>
                <option value="May"> May </option>
                <option value="June"> June </option>
                <option value="July"> July </option>
                <option value="August"> August </option>
                <option value="September"> September </option>
                <option value="October"> October </option>
                <option value="November"> November </option>
                <option value="December"> December </option>
              </select>
              <label class="form-sub-label" for="input_18_month" id="sublabel_month" style="min-height:13px"> Month </label>
            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="birthDate_day" id="input_18_day" class="form-dropdown validate[required]" data-component="birthdate-day">
                <option>  </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option>
                <option value="13"> 13 </option>
                <option value="14"> 14 </option>
                <option value="15"> 15 </option>
                <option value="16"> 16 </option>
                <option value="17"> 17 </option>
                <option value="18"> 18 </option>
                <option value="19"> 19 </option>
                <option value="20"> 20 </option>
                <option value="21"> 21 </option>
                <option value="22"> 22 </option>
                <option value="23"> 23 </option>
                <option value="24"> 24 </option>
                <option value="25"> 25 </option>
                <option value="26"> 26 </option>
                <option value="27"> 27 </option>
                <option value="28"> 28 </option>
                <option value="29"> 29 </option>
                <option value="30"> 30 </option>
                <option value="31"> 31 </option>
              </select>
              <label class="form-sub-label" for="input_18_day" id="sublabel_day" style="min-height:13px"> Day </label>
            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="birthDate_year" id="input_18_year" class="form-dropdown validate[required]" data-component="birthdate-year">
                <option>  </option>
                <option value="2019"> 2019 </option>
                <option value="2018"> 2018 </option>
                <option value="2017"> 2017 </option>
                <option value="2016"> 2016 </option>
                <option value="2015"> 2015 </option>
                <option value="2014"> 2014 </option>
                <option value="2013"> 2013 </option>
                <option value="2012"> 2012 </option>
                <option value="2011"> 2011 </option>
                <option value="2010"> 2010 </option>
                <option value="2009"> 2009 </option>
                <option value="2008"> 2008 </option>
                <option value="2007"> 2007 </option>
                <option value="2006"> 2006 </option>
                <option value="2005"> 2005 </option>
                <option value="2004"> 2004 </option>
                <option value="2003"> 2003 </option>
                <option value="2002"> 2002 </option>
                <option value="2001"> 2001 </option>
                <option value="2000"> 2000 </option>
                <option value="1999"> 1999 </option>
                <option value="1998"> 1998 </option>
                <option value="1997"> 1997 </option>
                <option value="1996"> 1996 </option>
                <option value="1995"> 1995 </option>
                <option value="1994"> 1994 </option>
                <option value="1993"> 1993 </option>
                <option value="1992"> 1992 </option>
                <option value="1991"> 1991 </option>
                <option value="1990"> 1990 </option>
                <option value="1989"> 1989 </option>
                <option value="1988"> 1988 </option>
                <option value="1987"> 1987 </option>
                <option value="1986"> 1986 </option>
                <option value="1985"> 1985 </option>
                <option value="1984"> 1984 </option>
                <option value="1983"> 1983 </option>
                <option value="1982"> 1982 </option>
                <option value="1981"> 1981 </option>
                <option value="1980"> 1980 </option>
                <option value="1979"> 1979 </option>
                <option value="1978"> 1978 </option>
                <option value="1977"> 1977 </option>
                <option value="1976"> 1976 </option>
                <option value="1975"> 1975 </option>
                <option value="1974"> 1974 </option>
                <option value="1973"> 1973 </option>
                <option value="1972"> 1972 </option>
                <option value="1971"> 1971 </option>
                <option value="1970"> 1970 </option>
                <option value="1969"> 1969 </option>
                <option value="1968"> 1968 </option>
                <option value="1967"> 1967 </option>
                <option value="1966"> 1966 </option>
                <option value="1965"> 1965 </option>
                <option value="1964"> 1964 </option>
                <option value="1963"> 1963 </option>
                <option value="1962"> 1962 </option>
                <option value="1961"> 1961 </option>
                <option value="1960"> 1960 </option>
                <option value="1959"> 1959 </option>
                <option value="1958"> 1958 </option>
                <option value="1957"> 1957 </option>
                <option value="1956"> 1956 </option>
                <option value="1955"> 1955 </option>
                <option value="1954"> 1954 </option>
                <option value="1953"> 1953 </option>
                <option value="1952"> 1952 </option>
                <option value="1951"> 1951 </option>
                <option value="1950"> 1950 </option>
                <option value="1949"> 1949 </option>
                <option value="1948"> 1948 </option>
                <option value="1947"> 1947 </option>
                <option value="1946"> 1946 </option>
                <option value="1945"> 1945 </option>
                <option value="1944"> 1944 </option>
                <option value="1943"> 1943 </option>
                <option value="1942"> 1942 </option>
                <option value="1941"> 1941 </option>
                <option value="1940"> 1940 </option>
                <option value="1939"> 1939 </option>
                <option value="1938"> 1938 </option>
                <option value="1937"> 1937 </option>
                <option value="1936"> 1936 </option>
                <option value="1935"> 1935 </option>
                <option value="1934"> 1934 </option>
                <option value="1933"> 1933 </option>
                <option value="1932"> 1932 </option>
                <option value="1931"> 1931 </option>
                <option value="1930"> 1930 </option>
                <option value="1929"> 1929 </option>
                <option value="1928"> 1928 </option>
                <option value="1927"> 1927 </option>
                <option value="1926"> 1926 </option>
                <option value="1925"> 1925 </option>
                <option value="1924"> 1924 </option>
                <option value="1923"> 1923 </option>
                <option value="1922"> 1922 </option>
                <option value="1921"> 1921 </option>
                <option value="1920"> 1920 </option>
              </select>
              <label class="form-sub-label" for="input_18_year" id="sublabel_year" style="min-height:13px"> Year </label>
            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_dropdown" id="id_8">
                    <label class="form-label form-label-left form-label-auto" id="label_8" for="input_8">
          Gender
          <span class="form-required">
            *
          </span>
        </label>
                    <div id="cid_8" class="form-input jf-required">
                        <select class="form-dropdown validate[required]" id="input_8" name="gender" style="width:150px" data-component="dropdown" required="" aria-labelledby="label_8">
            <option value=""> </option>
            <option value="Male"> Male </option>
            <option value="Female"> Female </option>
             <option value="Others">Others </option>          
          </select>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1" data-type="control_checkbox" id="id_22">
                    <label class="form-label form-label-top" id="label_22" for="input_22"> What do you use? Platforms, OS, programming languages, architectures, etc... </label>
                    <div id="cid_22" class="form-input jf-required">
                        <div class="form-multiple-column" data-columncount="4" data-component="checkbox">
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_0" name="whatDo[]" value="Java" />
                            <label id="label_input_22_0" for="input_22_0"> Java </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_1" name="whatDo[]" value="Linux" />
                            <label id="label_input_22_1" for="input_22_1"> Linux </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_2" name="whatDo[]" value="Android" />
                            <label id="label_input_22_2" for="input_22_2"> Android </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_3" name="whatDo[]" value="Python" />
                            <label id="label_input_22_3" for="input_22_3"> Python </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_4" name="whatDo[]" value="HTML" />
                            <label id="label_input_22_4" for="input_22_4"> HTML </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_5" name="whatDo[]" value="Windows" />
                            <label id="label_input_22_5" for="input_22_5"> Windows </label>
                            </span>
                            <span class="form-checkbox-item">
                              <span class="dragger-item">
                              </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_6" name="whatDo[]" value="Eclipse" />
                            <label id="label_input_22_6" for="input_22_6"> Eclipse </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_7" name="whatDo[]" value="JavaScript" />
                            <label id="label_input_22_7" for="input_22_7"> JavaScript </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_8" name="whatDo[]" value="C" />
                            <label id="label_input_22_8" for="input_22_8"> C </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_9" name="whatDo[]" value="Perl" />
                            <label id="label_input_22_9" for="input_22_9"> Perl </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_10" name="whatDo[]" value="Ubuntu" />
                            <label id="label_input_22_10" for="input_22_10"> Ubuntu </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_11" name="whatDo[]" value="Mac" />
                            <label id="label_input_22_11" for="input_22_11"> Mac </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_12" name="whatDo[]" value="jQuery" />
                            <label id="label_input_22_12" for="input_22_12"> jQuery </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_13" name="whatDo[]" value="iOS" />
                            <label id="label_input_22_13" for="input_22_13"> iOS </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_14" name="whatDo[]" value="MySql" />
                            <label id="label_input_22_14" for="input_22_14"> MySql </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_15" name="whatDo[]" value="Red Hat" />
                            <label id="label_input_22_15" for="input_22_15"> Red Hat </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_16" name="whatDo[]" value="PHP" />
                            <label id="label_input_22_16" for="input_22_16"> PHP </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_17" name="whatDo[]" value="Blackberry" />
                            <label id="label_input_22_17" for="input_22_17"> Blackberry </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_18" name="whatDo[]" value="Oracle" />
                            <label id="label_input_22_18" for="input_22_18"> Oracle </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_19" name="whatDo[]" value="C++" />
                            <label id="label_input_22_19" for="input_22_19"> C++ </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_20" name="whatDo[]" value="SQLite" />
                            <label id="label_input_22_20" for="input_22_20"> SQLite </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_21" name="whatDo[]" value="WordPress" />
                            <label id="label_input_22_21" for="input_22_21"> WordPress </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_22" name="whatDo[]" value="Ajax" />
                            <label id="label_input_22_22" for="input_22_22"> Ajax </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_23" name="whatDo[]" value="Photoshop" />
                            <label id="label_input_22_23" for="input_22_23"> Photoshop </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_24" name="whatDo[]" value="Json" />
                            <label id="label_input_22_24" for="input_22_24"> Json </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_25" name="whatDo[]" value="Joomla" />
                            <label id="label_input_22_25" for="input_22_25"> Joomla </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_26" name="whatDo[]" value="Css" />
                            <label id="label_input_22_26" for="input_22_26"> Css </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_27" name="whatDo[]" value="Dreamweaver" />
                            <label id="label_input_22_27" for="input_22_27"> Dreamweaver </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_28">
                    <label class="form-label form-label-left form-label-auto" id="label_28" for="input_28"> Working Experience </label>
                    <div id="cid_28" class="form-input">
                        <input type="text" id="input_28" name="experience" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_28" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_4">
                    <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4"> Personal site(s) </label>
                    <div id="cid_4" class="form-input">
                        <span class="form-sub-label-container" style="vertical-align:top">
            <input type="text" id="input_4" name="personalSites" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_4 sublabel_input_4" />
            <label class="form-sub-label" for="input_4" id="sublabel_input_4" style="min-height:13px"> If You have your own www.com </label>
          </span>
                    </div>
                </li>
                <li class="form-line" data-type="control_radio" id="id_29">
                    <label class="form-label form-label-left form-label-auto" id="label_29" for="input_29"> Are you working now? </label>
                    <div id="cid_29" class="form-input">
                        <div class="form-single-column" data-component="radio">
                            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
                            <input type="radio" class="form-radio" id="input_29_0" name="areYou" value="Yes" />
                            <label id="label_input_29_0" for="input_29_0"> Yes </label>
                            </span>
                            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
                            <input type="radio" class="form-radio" id="input_29_1" name="areYou" value="No" />
                            <label id="label_input_29_1" for="input_29_1"> No </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_radio" id="id_31">
                    <label class="form-label form-label-left form-label-auto" id="label_31" for="input_31">
          Immediate and full-time availability
          <span class="form-required">
            *
          </span>
        </label>
                    <div id="cid_31" class="form-input jf-required">
                        <div class="form-single-column" data-component="radio">
                            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
                            <input type="radio" class="form-radio validate[required]" id="input_31_0" name="immediateAnd" value="Yes" required="" />
                            <label id="label_input_31_0" for="input_31_0"> Yes </label>
                            </span>
                            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
                            <input type="radio" class="form-radio validate[required]" id="input_31_1" name="immediateAnd" value="No" required="" />
                            <label id="label_input_31_1" for="input_31_1"> No </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_textbox" id="id_30">
                    <label class="form-label form-label-left form-label-auto" id="label_30" for="input_30">
          What are your salary expectations?
          <span class="form-required">
            *
          </span>
        </label>
                    <div id="cid_30" class="form-input jf-required">
                        <input type="text" id="input_30" name="whatAre" data-type="input-textbox" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_30" required="" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textarea" id="id_7">
                    <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7"> Sites samples of your abilities with explanation of your participation in each one </label>
                    <div id="cid_7" class="form-input">
                        <textarea id="input_7" class="form-textarea" name="sitesSamples" cols="40" rows="6" data-component="textarea" aria-labelledby="label_7"></textarea>
                    </div>
                </li>
                <li class="form-line" data-type="control_textarea" id="id_24">
                    <label class="form-label form-label-left form-label-auto" id="label_24" for="input_24"> List your social sites </label>
                    <div id="cid_24" class="form-input">
                        <span class="form-sub-label-container" style="vertical-align:top">
            <textarea class="form-textarea" name="listYour" cols="40" rows="6" ></textarea>
            <label class="form-sub-label" for="input_24" id="sublabel_input_24" style="min-height:13px"> i.e. @user, www.github.com/ulser, www youtube.com/user </label>
          </span>
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_10">
                    <label class="form-label form-label-left form-label-auto" id="label_10" for="input_10"> Location </label>
                    <div id="cid_10" class="form-input">
                        <span class="form-sub-label-container" style="vertical-align:top">
            <input type="text" id="input_10" name="location" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_10 sublabel_input_10" />
            <label class="form-sub-label" for="input_10" id="sublabel_input_10" style="min-height:13px"> Where are you at now? </label>
          </span>
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_27">
                    <label class="form-label form-label-left form-label-auto" id="label_27" for="input_27"> Last finished project? </label>
                    <div id="cid_27" class="form-input">
                        <input type="text" id="input_27" name="lastFinished" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_27" />
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1" data-type="control_textarea" id="id_25">
                    <label class="form-label form-label-top" id="label_25" for="input_25"> What project are you working on now? </label>
                    <div id="cid_25" class="form-input-wide">
                        <textarea id="input_25" class="form-textarea" name="whatProject" cols="62" rows="6" data-component="textarea" aria-labelledby="label_25"></textarea>
                    </div>
                </li>
                <li class="form-line" data-type="control_birthdate" id="id_26">
                    <label class="form-label form-label-left form-label-auto" id="label_26" for="input_26"> Project Release Date </label>
                    <div id="cid_26" class="form-input">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="projectRelease_month" id="input_26_month" class="form-dropdown" data-component="birthdate-month">
                <option>  </option>
                <option value="January"> January </option>
                <option value="February"> February </option>
                <option value="March"> March </option>
                <option value="April"> April </option>
                <option value="May"> May </option>
                <option value="June"> June </option>
                <option value="July"> July </option>
                <option value="August"> August </option>
                <option value="September"> September </option>
                <option value="October"> October </option>
                <option value="November"> November </option>
                <option value="December"> December </option>
              </select>
              <label class="form-sub-label" for="input_26_month" id="sublabel_month" style="min-height:13px"> Month </label>
            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="projectRelease_day" id="input_26_day" class="form-dropdown" data-component="birthdate-day">
                <option>  </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option>
                <option value="13"> 13 </option>
                <option value="14"> 14 </option>
                <option value="15"> 15 </option>
                <option value="16"> 16 </option>
                <option value="17"> 17 </option>
                <option value="18"> 18 </option>
                <option value="19"> 19 </option>
                <option value="20"> 20 </option>
                <option value="21"> 21 </option>
                <option value="22"> 22 </option>
                <option value="23"> 23 </option>
                <option value="24"> 24 </option>
                <option value="25"> 25 </option>
                <option value="26"> 26 </option>
                <option value="27"> 27 </option>
                <option value="28"> 28 </option>
                <option value="29"> 29 </option>
                <option value="30"> 30 </option>
                <option value="31"> 31 </option>
              </select>
              <label class="form-sub-label" for="input_26_day" id="sublabel_day" style="min-height:13px"> Day </label>
            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="projectRelease_year" id="input_26_year" class="form-dropdown" data-component="birthdate-year">
                <option>  </option>
                <option value="2019"> 2019 </option>
                <option value="2018"> 2018 </option>
                <option value="2017"> 2017 </option>
                <option value="2016"> 2016 </option>
                <option value="2015"> 2015 </option>
                <option value="2014"> 2014 </option>
                <option value="2013"> 2013 </option>
                <option value="2012"> 2012 </option>
                <option value="2011"> 2011 </option>
                <option value="2010"> 2010 </option>
                <option value="2009"> 2009 </option>
                <option value="2008"> 2008 </option>
                <option value="2007"> 2007 </option>
                <option value="2006"> 2006 </option>
                <option value="2005"> 2005 </option>
                <option value="2004"> 2004 </option>
                <option value="2003"> 2003 </option>
                <option value="2002"> 2002 </option>
                <option value="2001"> 2001 </option>
                <option value="2000"> 2000 </option>
                <option value="1999"> 1999 </option>
                <option value="1998"> 1998 </option>
                <option value="1997"> 1997 </option>
                <option value="1996"> 1996 </option>
                <option value="1995"> 1995 </option>
                <option value="1994"> 1994 </option>
                <option value="1993"> 1993 </option>
                <option value="1992"> 1992 </option>
                <option value="1991"> 1991 </option>
                <option value="1990"> 1990 </option>
                <option value="1989"> 1989 </option>
                <option value="1988"> 1988 </option>
                <option value="1987"> 1987 </option>
                <option value="1986"> 1986 </option>
                <option value="1985"> 1985 </option>
                <option value="1984"> 1984 </option>
                <option value="1983"> 1983 </option>
                <option value="1982"> 1982 </option>
                <option value="1981"> 1981 </option>
                <option value="1980"> 1980 </option>
                <option value="1979"> 1979 </option>
                <option value="1978"> 1978 </option>
                <option value="1977"> 1977 </option>
                <option value="1976"> 1976 </option>
                <option value="1975"> 1975 </option>
                <option value="1974"> 1974 </option>
                <option value="1973"> 1973 </option>
                <option value="1972"> 1972 </option>
                <option value="1971"> 1971 </option>
                <option value="1970"> 1970 </option>
                <option value="1969"> 1969 </option>
                <option value="1968"> 1968 </option>
                <option value="1967"> 1967 </option>
                <option value="1966"> 1966 </option>
                <option value="1965"> 1965 </option>
                <option value="1964"> 1964 </option>
                <option value="1963"> 1963 </option>
                <option value="1962"> 1962 </option>
                <option value="1961"> 1961 </option>
                <option value="1960"> 1960 </option>
                <option value="1959"> 1959 </option>
                <option value="1958"> 1958 </option>
                <option value="1957"> 1957 </option>
                <option value="1956"> 1956 </option>
                <option value="1955"> 1955 </option>
                <option value="1954"> 1954 </option>
                <option value="1953"> 1953 </option>
                <option value="1952"> 1952 </option>
                <option value="1951"> 1951 </option>
                <option value="1950"> 1950 </option>
                <option value="1949"> 1949 </option>
                <option value="1948"> 1948 </option>
                <option value="1947"> 1947 </option>
                <option value="1946"> 1946 </option>
                <option value="1945"> 1945 </option>
                <option value="1944"> 1944 </option>
                <option value="1943"> 1943 </option>
                <option value="1942"> 1942 </option>
                <option value="1941"> 1941 </option>
                <option value="1940"> 1940 </option>
                <option value="1939"> 1939 </option>
                <option value="1938"> 1938 </option>
                <option value="1937"> 1937 </option>
                <option value="1936"> 1936 </option>
                <option value="1935"> 1935 </option>
                <option value="1934"> 1934 </option>
                <option value="1933"> 1933 </option>
                <option value="1932"> 1932 </option>
                <option value="1931"> 1931 </option>
                <option value="1930"> 1930 </option>
                <option value="1929"> 1929 </option>
                <option value="1928"> 1928 </option>
                <option value="1927"> 1927 </option>
                <option value="1926"> 1926 </option>
                <option value="1925"> 1925 </option>
                <option value="1924"> 1924 </option>
                <option value="1923"> 1923 </option>
                <option value="1922"> 1922 </option>
                <option value="1921"> 1921 </option>
                <option value="1920"> 1920 </option>
              </select>
              <label class="form-sub-label" for="input_26_year" id="sublabel_year" style="min-height:13px"> Year </label>
            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_email" id="id_16">
                    <label class="form-label form-label-left form-label-auto" id="label_16" for="input_16">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
                    <div id="cid_16" class="form-input jf-required">
                        <input type="email" id="input_16" name="email" class="form-textbox validate[required, Email]" size="30" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_16" required="" />
                    </div>
                </li>
                <li class="form-line" data-type="control_phone" id="id_34">
                    <label class="form-label form-label-left form-label-auto" id="label_34" for="input_34_area"> Phone Number </label>
                    <div id="cid_34" class="form-input">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
              <!-- <input type="tel" id="input_34_area" name="phoneNumber34_area" class="form-textbox" size="6" value="" data-component="areaCode" aria-labelledby="label_34 sublabel_34_area" /> -->
              <span class="phone-separate" aria-hidden="true">
                <!--  - -->
              <!-- </span>
                            <label class="form-sub-label" for="input_34_area" id="sublabel_34_area" style="min-height:13px"> Area Code </label>
                            </span> -->
                            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" id="input_34_phone" name="phoneNumber" class="form-textbox" size="12" value="" data-component="phone" aria-labelledby="label_34 sublabel_34_phone" />
              <!-- <label class="form-sub-label" for="input_34_phone" id="sublabel_34_phone" style="min-height:13px"> Phone Number </label> -->
            </span>
                        </div>
                    </div>
                </li>




 <li class="form-line" data-type="control_phone" id="id_34">
                    <label class="form-label form-label-left form-label-auto" id="label_34" for="input_34_area"> CV Upload</label>
                    <div id="cid_34" class="form-input">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="file" id="" name="cv" class="form-textbox" data-component="areaCode" />
         
                        </div>
                    </div>
                </li>













                <li class="form-line" data-type="control_button" id="id_2">
                    <div id="cid_2" class="form-input-wide">
                        <div style="text-align:left" class="form-buttons-wrapper ">
                            <input   type="submit" name="submit" value="Submit" class="form-submit-reset form-submit-button-black_glass" >
            
                            <span>
               
            </span>
                            <button id="input_reset_2" type="reset" class="form-submit-reset form-submit-button-black_glass" data-component="button">
              Clear Form
            </button>
                        </div>
                    </div>
                </li>
                <li style="display:none">
                    Should be Empty:
                    <input type="text" name="website" value="" />
                </li>
            </ul>
        </div>
     
        <div class="formFooter-heightMask">
        </div>

    </form>
</body>


</html>
    <?php } else {  header('location: login.php');} ?>
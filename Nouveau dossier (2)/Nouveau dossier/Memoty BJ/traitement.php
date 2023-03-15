<?php 
session_start();
include('db.php');

if(isset($_POST['cat'])){
    if(!empty($_POST['nom'])) {
        if(isset($_FILES['img'])) {
            $extension1 = substr(strrchr($_FILES['img']['name'],'.'),1);

            $path1 = "upload/".$_POST['nom'].'1.'.$extension1;

            move_uploaded_file($_FILES['img']['tmp_name'],$path1);

            $send = $bdd->prepare('INSERT INTO categorie(nom,img) VALUES(?,?)');
            $send->execute(array($_POST['nom'],$path1));

            header('Location: user.php');
        }
    }
}

if(isset($_POST['car'])){
    
    if(!empty($_POST['nom']) AND !empty($_POST['last']) AND !empty($_POST['mtn']) AND !empty($_POST['description']) AND !empty($_POST['cat'])) {


        $path1 = "";
        $path2 = "";
        $path3 = "";
        $path4 = "";
        $path5 = "";
        $path6 = "";
        $path7 = "";
        $path8 = "";
        $path9 = "";
        $path10 = "";
        $path11 = "";
        $path12 = "";
        $path13 = "";
        $path14 = "";
        $path15 = "";
        $path16 = "";
        $path17 = "";
        $path18 = "";
        $path19 = "";
        $path20 = "";
        $path21 = "";
        $path22 = "";
        $path23 = "";
        $path24 = "";
        $path25 = "";
        $path26 = "";
        $path27 = "";
        $path28 = "";
        $path29 = "";
        $path30 = "";
        $path31 = "";
        $path32 = "";
        $path33 = "";
        $path34 = "";
        $path35 = "";
        $path36 = "";
        $path37 = "";
        $path38 = "";
        $path39 = "";
        $path40 = "";
        $path41 = "";
        $path42 = "";
        $path43 = "";
        $path44 = "";
        $path45 = "";
        $path46 = "";
        $path47 = "";
        $path48 = "";
        $path49 = "";
        $path50 = "";

        if(isset($_FILES['img1'])) {

            $extension1 = substr(strrchr($_FILES['img1']['name'],'.'),1);

            if($extension1) {
                $path1 = "upload/".$_POST['nom'].'1.'.$extension1;

                move_uploaded_file($_FILES['img1']['tmp_name'],$path1);
            }

        }
        if(isset($_FILES['img2'])) {

            $extension2 = substr(strrchr($_FILES['img2']['name'],'.'),1);

            if($extension2) {
                $path2 = "upload/".$_POST['nom'].'2.'.$extension2;

                move_uploaded_file($_FILES['img2']['tmp_name'],$path2);
            }

        }
        if(isset($_FILES['img3'])) {

            $extension3 = substr(strrchr($_FILES['img3']['name'],'.'),1);

            if($extension3) {
                $path3 = "upload/".$_POST['nom'].'3.'.$extension3;

                move_uploaded_file($_FILES['img3']['tmp_name'],$path3);
            }

        }
        if(isset($_FILES['img4'])) {

            $extension4 = substr(strrchr($_FILES['img4']['name'],'.'),1);

            if($extension4) {
                $path4 = "upload/".$_POST['nom'].'4.'.$extension4;

                move_uploaded_file($_FILES['img4']['tmp_name'],$path4);
            }

        }
        if(isset($_FILES['img5'])) {

            $extension5 = substr(strrchr($_FILES['img5']['name'],'.'),1);

            if($extension5) {
                $path5 = "upload/".$_POST['nom'].'5.'.$extension5;

                move_uploaded_file($_FILES['img5']['tmp_name'],$path5);
            }

        }
        if(isset($_FILES['img6'])) {

            $extension6 = substr(strrchr($_FILES['img6']['name'],'.'),1);

            if($extension6) {
                $path6 = "upload/".$_POST['nom'].'6.'.$extension6;

                move_uploaded_file($_FILES['img6']['tmp_name'],$path6);
            }

        }
        if(isset($_FILES['img7'])) {

            $extension7 = substr(strrchr($_FILES['img7']['name'],'.'),1);

            if($extension7) {
                $path7 = "upload/".$_POST['nom'].'7.'.$extension7;

                move_uploaded_file($_FILES['img7']['tmp_name'],$path7);
            }

        }
        if(isset($_FILES['img8'])) {

            $extension8 = substr(strrchr($_FILES['img8']['name'],'.'),1);

            if($extension8) {
                $path8 = "upload/".$_POST['nom'].'8.'.$extension8;

                move_uploaded_file($_FILES['img8']['tmp_name'],$path8);
            }

        }
        if(isset($_FILES['img9'])) {

            $extension9 = substr(strrchr($_FILES['img9']['name'],'.'),1);

            if($extension9) {
                $path9 = "upload/".$_POST['nom'].'9.'.$extension9;

                move_uploaded_file($_FILES['img9']['tmp_name'],$path9);
            }

        }
        if(isset($_FILES['img10'])) {

            $extension10 = substr(strrchr($_FILES['img10']['name'],'.'),1);

            if($extension10) {
                $path10 = "upload/".$_POST['nom'].'10.'.$extension10;

                move_uploaded_file($_FILES['img10']['tmp_name'],$path10);
            }

        }
        if(isset($_FILES['img11'])) {

            $extension11 = substr(strrchr($_FILES['img11']['name'],'.'),1);

            if($extension11) {
                $path11 = "upload/".$_POST['nom'].'11.'.$extension11;

                move_uploaded_file($_FILES['img11']['tmp_name'],$path11);
            }

        }
        if(isset($_FILES['img12'])) {

            $extension12 = substr(strrchr($_FILES['img12']['name'],'.'),1);

            if($extension12) {
                $path12 = "upload/".$_POST['nom'].'12.'.$extension12;

                move_uploaded_file($_FILES['img12']['tmp_name'],$path12);
            }

        }
        if(isset($_FILES['img13'])) {

            $extension13 = substr(strrchr($_FILES['img13']['name'],'.'),1);

            if($extension13) {
                $path13 = "upload/".$_POST['nom'].'13.'.$extension13;

                move_uploaded_file($_FILES['img13']['tmp_name'],$path13);
            }

        }
        if(isset($_FILES['img14'])) {

            $extension14 = substr(strrchr($_FILES['img14']['name'],'.'),1);

            if($extension14) {
                $path14 = "upload/".$_POST['nom'].'14.'.$extension14;

                move_uploaded_file($_FILES['img14']['tmp_name'],$path14);
            }

        }
        if(isset($_FILES['img15'])) {

            $extension15 = substr(strrchr($_FILES['img15']['name'],'.'),1);

            if($extension15) {
                $path15 = "upload/".$_POST['nom'].'15.'.$extension15;

                move_uploaded_file($_FILES['img15']['tmp_name'],$path15);
            }

        }
        if(isset($_FILES['img16'])) {

            $extension16 = substr(strrchr($_FILES['img16']['name'],'.'),1);

            if($extension16) {
                $path16 = "upload/".$_POST['nom'].'16.'.$extension16;

                move_uploaded_file($_FILES['img16']['tmp_name'],$path16);
            }

        }
        if(isset($_FILES['img17'])) {

            $extension17 = substr(strrchr($_FILES['img17']['name'],'.'),1);

            if($extension17) {
                $path17 = "upload/".$_POST['nom'].'17.'.$extension17;

                move_uploaded_file($_FILES['img17']['tmp_name'],$path17);
            }

        }
        if(isset($_FILES['img18'])) {

            $extension18 = substr(strrchr($_FILES['img18']['name'],'.'),1);

            if($extension18) {
                $path18 = "upload/".$_POST['nom'].'18.'.$extension18;

                move_uploaded_file($_FILES['img18']['tmp_name'],$path18);
            }

        }
        if(isset($_FILES['img19'])) {

            $extension19 = substr(strrchr($_FILES['img19']['name'],'.'),1);

            if($extension19) {
                $path19 = "upload/".$_POST['nom'].'19.'.$extension19;

                move_uploaded_file($_FILES['img19']['tmp_name'],$path19);
            }

        }
        if(isset($_FILES['img20'])) {

            $extension20 = substr(strrchr($_FILES['img20']['name'],'.'),1);

            if($extension20) {
                $path20 = "upload/".$_POST['nom'].'20.'.$extension20;

                move_uploaded_file($_FILES['img20']['tmp_name'],$path20);
            }

        }
        if(isset($_FILES['img21'])) {

            $extension21 = substr(strrchr($_FILES['img21']['name'],'.'),1);

            if($extension21) {
                $path21 = "upload/".$_POST['nom'].'21.'.$extension21;

                move_uploaded_file($_FILES['img21']['tmp_name'],$path21);
            }

        }
        if(isset($_FILES['img22'])) {

            $extension22 = substr(strrchr($_FILES['img22']['name'],'.'),1);

            if($extension22) {
                $path22 = "upload/".$_POST['nom'].'22.'.$extension22;

                move_uploaded_file($_FILES['img22']['tmp_name'],$path22);
            }

        }
        if(isset($_FILES['img23'])) {

            $extension23 = substr(strrchr($_FILES['img23']['name'],'.'),1);

            if($extension23) {
                $path23 = "upload/".$_POST['nom'].'23.'.$extension23;

                move_uploaded_file($_FILES['img23']['tmp_name'],$path23);
            }

        }
        if(isset($_FILES['img24'])) {

            $extension24 = substr(strrchr($_FILES['img24']['name'],'.'),1);

            if($extension24) {
                $path24 = "upload/".$_POST['nom'].'24.'.$extension24;

                move_uploaded_file($_FILES['img24']['tmp_name'],$path24);
            }

        }
        if(isset($_FILES['img25'])) {

            $extension25 = substr(strrchr($_FILES['img25']['name'],'.'),1);

            if($extension25) {
                $path25 = "upload/".$_POST['nom'].'25.'.$extension25;

                move_uploaded_file($_FILES['img25']['tmp_name'],$path25);
            }

        }
        if(isset($_FILES['img26'])) {

            $extension26 = substr(strrchr($_FILES['img26']['name'],'.'),1);

            if($extension26) {
                $path26 = "upload/".$_POST['nom'].'26.'.$extension26;

                move_uploaded_file($_FILES['img26']['tmp_name'],$path26);
            }

        }
        if(isset($_FILES['img27'])) {

            $extension27 = substr(strrchr($_FILES['img27']['name'],'.'),1);

            if($extension27) {
                $path27 = "upload/".$_POST['nom'].'27.'.$extension27;

                move_uploaded_file($_FILES['img27']['tmp_name'],$path27);
            }

        }
        if(isset($_FILES['img28'])) {

            $extension28 = substr(strrchr($_FILES['img28']['name'],'.'),1);

            if($extension28) {
                $path28 = "upload/".$_POST['nom'].'28.'.$extension28;

                move_uploaded_file($_FILES['img28']['tmp_name'],$path28);
            }

        }
        if(isset($_FILES['img29'])) {

            $extension29 = substr(strrchr($_FILES['img29']['name'],'.'),1);

            if($extension29) {
                $path29 = "upload/".$_POST['nom'].'29.'.$extension29;

                move_uploaded_file($_FILES['img29']['tmp_name'],$path29);
            }

        }
        if(isset($_FILES['img30'])) {

            $extension30 = substr(strrchr($_FILES['img30']['name'],'.'),1);

            if($extension30) {
                $path30 = "upload/".$_POST['nom'].'30.'.$extension30;

                move_uploaded_file($_FILES['img30']['tmp_name'],$path30);
            }

        }
        if(isset($_FILES['img31'])) {

            $extension31 = substr(strrchr($_FILES['img31']['name'],'.'),1);

            if($extension31) {
                $path31 = "upload/".$_POST['nom'].'31.'.$extension31;

                move_uploaded_file($_FILES['img31']['tmp_name'],$path31);
            }

        }
        if(isset($_FILES['img32'])) {

            $extension32 = substr(strrchr($_FILES['img32']['name'],'.'),1);

            if($extension32) {
                $path32 = "upload/".$_POST['nom'].'32.'.$extension32;

                move_uploaded_file($_FILES['img32']['tmp_name'],$path32);
            }

        }
        if(isset($_FILES['img33'])) {

            $extension33 = substr(strrchr($_FILES['img33']['name'],'.'),1);

            if($extension33) {
                $path33 = "upload/".$_POST['nom'].'33.'.$extension33;

                move_uploaded_file($_FILES['img33']['tmp_name'],$path33);
            }

        }
        if(isset($_FILES['img34'])) {

            $extension34 = substr(strrchr($_FILES['img34']['name'],'.'),1);

            if($extension34) {
                $path34 = "upload/".$_POST['nom'].'34.'.$extension34;

                move_uploaded_file($_FILES['img34']['tmp_name'],$path34);
            }

        }
        if(isset($_FILES['img35'])) {

            $extension35 = substr(strrchr($_FILES['img35']['name'],'.'),1);

            if($extension35) {
                $path35 = "upload/".$_POST['nom'].'35.'.$extension35;

                move_uploaded_file($_FILES['img35']['tmp_name'],$path35);
            }

        }
        if(isset($_FILES['img36'])) {

            $extension36 = substr(strrchr($_FILES['img36']['name'],'.'),1);

            if($extension36) {
                $path36 = "upload/".$_POST['nom'].'36.'.$extension36;

                move_uploaded_file($_FILES['img36']['tmp_name'],$path36);
            }

        }
        if(isset($_FILES['img37'])) {

            $extension37 = substr(strrchr($_FILES['img37']['name'],'.'),1);

            if($extension37) {
                $path37 = "upload/".$_POST['nom'].'37.'.$extension37;

                move_uploaded_file($_FILES['img37']['tmp_name'],$path37);
            }

        }
        if(isset($_FILES['img38'])) {

            $extension38 = substr(strrchr($_FILES['img38']['name'],'.'),1);

            if($extension38) {
                $path38 = "upload/".$_POST['nom'].'38.'.$extension38;

                move_uploaded_file($_FILES['img38']['tmp_name'],$path38);
            }

        }
        if(isset($_FILES['img39'])) {

            $extension39 = substr(strrchr($_FILES['img39']['name'],'.'),1);

            if($extension39) {
                $path39 = "upload/".$_POST['nom'].'39.'.$extension39;

                move_uploaded_file($_FILES['img39']['tmp_name'],$path39);
            }

        }
        if(isset($_FILES['img40'])) {

            $extension40 = substr(strrchr($_FILES['img40']['name'],'.'),1);

            if($extension40) {
                $path40 = "upload/".$_POST['nom'].'40.'.$extension40;

                move_uploaded_file($_FILES['img40']['tmp_name'],$path40);
            }

        }
        if(isset($_FILES['img41'])) {

            $extension41 = substr(strrchr($_FILES['img41']['name'],'.'),1);

            if($extension41) {
                $path41 = "upload/".$_POST['nom'].'41.'.$extension41;

                move_uploaded_file($_FILES['img41']['tmp_name'],$path41);
            }

        }
        if(isset($_FILES['img42'])) {

            $extension42 = substr(strrchr($_FILES['img42']['name'],'.'),1);

            if($extension42) {
                $path42 = "upload/".$_POST['nom'].'42.'.$extension42;

                move_uploaded_file($_FILES['img42']['tmp_name'],$path42);
            }

        }
        if(isset($_FILES['img43'])) {

            $extension43 = substr(strrchr($_FILES['img43']['name'],'.'),1);

            if($extension43) {
                $path43 = "upload/".$_POST['nom'].'43.'.$extension43;

                move_uploaded_file($_FILES['img43']['tmp_name'],$path43);
            }

        }
        if(isset($_FILES['img44'])) {

            $extension44 = substr(strrchr($_FILES['img44']['name'],'.'),1);

            if($extension44) {
                $path44 = "upload/".$_POST['nom'].'44.'.$extension44;

                move_uploaded_file($_FILES['img44']['tmp_name'],$path44);
            }

        }
        if(isset($_FILES['img45'])) {

            $extension45 = substr(strrchr($_FILES['img45']['name'],'.'),1);

            if($extension45) {
                $path45 = "upload/".$_POST['nom'].'45.'.$extension45;

                move_uploaded_file($_FILES['img45']['tmp_name'],$path45);
            }

        }
        if(isset($_FILES['img46'])) {

            $extension46 = substr(strrchr($_FILES['img46']['name'],'.'),1);

            if($extension46) {
                $path46 = "upload/".$_POST['nom'].'46.'.$extension46;

                move_uploaded_file($_FILES['img46']['tmp_name'],$path46);
            }

        }if(isset($_FILES['img47'])) {

            $extension47 = substr(strrchr($_FILES['img47']['name'],'.'),1);

            if($extension47) {
                $path47 = "upload/".$_POST['nom'].'47.'.$extension47;

                move_uploaded_file($_FILES['img47']['tmp_name'],$path47);
            }

        }
        if(isset($_FILES['img48'])) {

            $extension48 = substr(strrchr($_FILES['img48']['name'],'.'),1);

            if($extension48) {
                $path48 = "upload/".$_POST['nom'].'48.'.$extension48;

                move_uploaded_file($_FILES['img48']['tmp_name'],$path48);
            }

        }
        if(isset($_FILES['img49'])) {

            $extension49 = substr(strrchr($_FILES['img49']['name'],'.'),1);

            if($extension49) {
                $path49 = "upload/".$_POST['nom'].'49.'.$extension49;

                move_uploaded_file($_FILES['img49']['tmp_name'],$path49);
            }

        }
        if(isset($_FILES['img50'])) {

            $extension50 = substr(strrchr($_FILES['img50']['name'],'.'),1);

            if($extension50) {
                $path50 = "upload/".$_POST['nom'].'50.'.$extension50;

                move_uploaded_file($_FILES['img50']['tmp_name'],$path50);
            }

        }
            
        $send = $bdd->prepare('INSERT INTO vehicle(nom,last,now,description,img1,img2,img3,img4,img5,img6,img7,img8,img9,img10,img11,img12,img13,img14,img15,img16,img17,img18,img19,img20,img21,img22,img23,img24,img25,img26,img27,img28,img29,img30,img31,img32,img33,img34,img35,img36,img37,img38,img39,img40,img41,img42,img43,img44,img45,img46,img47,img48,img49,img50,cat_id) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
        $send->execute(array($_POST['nom'],$_POST['last'],$_POST['mtn'],$_POST['description'],$path1,$path2,$path3,$path4,$path5,$path6,$path7,$path8,$path9,$path10,$path11,$path12,$path13,$path14,$path15,$path16,$path17,$path18,$path19,$path20,$path21,$path22,$path23,$path24,$path25,$path26,$path27,$path28,$path29,$path30,$path31,$path32,$path33,$path34,$path35,$path36,$path37,$path38,$path39,$path40,$path41,$path42,$path43,$path44,$path45,$path46,$path47,$path48,$path49,$path50,$_POST['cat']));

        header('Location: user.php');
    }
}
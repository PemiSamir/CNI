
<?php

    include 'connexionbd.php';
    require_once(__DIR__ .'\fpdf182\fpdf.php');

    $requet="SELECT * FROM information order by id desc limit 1";
    $result=mysqli_query($con,$requet) or die("impossible d'exécuter la requet");
    $info=mysqli_fetch_assoc($result);

   
         class myPDF extends FPDF
        {
         	function header()
         	{

                $this->Image('image\cnifond.png',0,-1,297,210);
                $this->SetFillColor(20,45,54);

               
         		/* $this->Cell(100,25,'PLATEFORME EDUCATIVE',0,0,'C');
                //$this->Cell(276,20,' ',0,0,'C');
                
                $this->Cell(250,25,'SUIVI DES ENSEIGNEMENTS',0,0,'C');
                $this->Ln();

                $this->SetFont('Times', '', 16);
                $this->Cell(100,0,'**********',0,0,'C');
                $this->SetFont('Times', 'B', 24);
                $this->Cell(72,17,'Axiom',0,0,'C');
                $this->SetFont('Times', '', 16);
                $this->Cell(105,0,'**********',0,0,'C');

                 $this->Ln();
                
                $this->Cell(100,13,'ENSEIGNEMENT SECONDAIRE',0,0,'C');
                
                $this->Cell(72,35,"Education Pour Tous",0,0,'C');
               
                $this->Cell(106,13,'FORMATION CERTIFIANTE',0,0,'C');
 */
         	}
            function footer()
            {
                //$this->SetY(-40);
                //$this->SetFont('Times', '', 9);
                //$this->Cell(276,5,' ',0,0,'C');

               /* $this->SetFont('Courier', 'B', 14);
                $this->SetTextColor(0,0,0);
                $this->Cell(430,25,utf8_decode('Daté du ' ),0,0,'C');*/
            }

            function corp($info)
            {

                

                $this->Image('image\drapeau.png',5,-1,60,50);
         		$this->SetFont('Times', 'B', 16);
                 $this->Ln(6);
                $this->SetFont('Times', 'B', 26);
                $this->SetTextColor(0,32,96);
                $this->Cell(300,11,'REPUBLIQUE DU CAMEROUN',0,0,'C');
                $this->Ln();
                $this->SetFont('Times', 'B', 26);
                $this->SetTextColor(0,32,96);
                $this->Cell(300,10,'REPUBLIC OF CAMEROON',0,0,'C');

                $this->Image('image\sim.jpg',15,65,30,30);
                $this->Image($info["photo"],15,120,30,30);
                
                $this->Ln(6);
                $this->SetFont('Times', 'B', 12);
                $this->SetTextColor(0,125,0);
                $this->Cell(150,50,utf8_decode('NOM/SURNAME'),0,0,'C');

                $this->Ln(1);
                $this->SetFont('Times', 'B', 18);
                $this->SetTextColor(0,0,0);
                $this->Cell(160,60,utf8_decode($info["nom"]),0,0,'C');

                $this->Ln(17);
                $this->SetFont('Times', 'B', 12);
                $this->SetTextColor(0,125,0);
                $this->Cell(162,50,utf8_decode('PRENOM/GIVEN NAME'),0,0,'C');

                $this->Ln(1);
                $this->SetFont('Times', 'B', 18);
                $this->SetTextColor(0,0,0);
                $this->Cell(150,60,utf8_decode($info["prenom"]),0,0,'C');

                $this->Ln(17);
                $this->SetFont('Times', 'B', 12);
                $this->SetTextColor(0,125,0);
                $this->Cell(192,50,utf8_decode('DATE DE NAISSANCE/DATE OF BIRTH'),0,0,'C');

                $this->Ln(1);
                $this->SetFont('Times', 'B', 18);
                $this->SetTextColor(0,0,0);
                $this->Cell(150,60,utf8_decode($info["date_naiss"]),0,0,'C');

                $this->Ln(15);
                $this->SetFont('Times', 'B', 12);
                $this->SetTextColor(0,125,0);
                $this->Cell(192,50,utf8_decode('LIEU DE NAISSANCE/PLACE OF BIRTH'),0,0,'C');

                $this->Ln(1);
                $this->SetFont('Times', 'B', 18);
                $this->SetTextColor(0,0,0);
                $this->Cell(150,60,utf8_decode($info["lieu"]),0,0,'C');

                $this->Ln(15);
                $this->SetFont('Times', 'B', 12);
                $this->SetTextColor(0,125,0);
                $this->Cell(130,50,utf8_decode('SEXE/SEX'),0,0,'C');
                $this->Cell(1,50,utf8_decode('TAILLE/HEIGHT'),0,0,'C');

                $this->Ln(1);
                $this->SetFont('Times', 'B', 18);
                $this->SetTextColor(0,0,0);
                $this->Cell(130,60,utf8_decode($info["sexe"]),0,0,'C');
                $this->Cell(5,60,utf8_decode($info["taille"]),0,0,'C');

                $this->Ln(16);
                $this->SetFont('Times', 'B', 12);
                $this->SetTextColor(0,125,0);
                $this->Cell(168,50,utf8_decode('PROFESSION/OCCUPATION'),0,0,'C');

                $this->Ln(1);
                $this->SetFont('Times', 'B', 18);
                $this->SetTextColor(0,0,0);
                $this->Cell(160,60,utf8_decode($info["profession"]),0,0,'C');

                $this->Ln(16);
                $this->SetFont('Times', 'B', 12);
                $this->SetTextColor(0,125,0);
                $this->Cell(150,50,utf8_decode('SIGNATURE'),0,0,'C');

                $this->Ln(1);
                $this->SetFont('Times', 'B', 18);
                $this->Image('image\signature.png',70,160,50,50);

                $this->Image($info["photo"],170,60,120,120);

                $this->Ln(16);
                $this->SetFont('Times', 'B', 12);
                $this->SetTextColor(0,125,0);
                $this->Cell(80,50,utf8_decode('PERE/FATHER'),0,0,'C');

                $this->Ln(1);
                $this->SetFont('Times', 'B', 18);
                $this->SetTextColor(0,0,0);
                $this->Cell(90,60,utf8_decode($info["pere"]),0,0,'C');

                $this->Ln(19);
                $this->SetFont('Times', 'B', 12);
                $this->SetTextColor(0,125,0);
                $this->Cell(80,50,utf8_decode('MERE/MOTHER'),0,0,'C');

                $this->Ln(1);
                $this->SetFont('Times', 'B', 18);
                $this->SetTextColor(0,0,0);
                $this->Cell(90,60,utf8_decode($info["mere"]),0,0,'C');

                $this->Ln(19);
                $this->SetFont('Times', 'B', 12);
                $this->SetTextColor(0,125,0);
                $this->Cell(65,50,utf8_decode('S.P/S.M'),0,0,'C');
                $this->Cell(100,50,utf8_decode('DATE DELIVRANCE/DATE OF ISSUE'),0,0,'C');
                $this->Cell(120,50,utf8_decode('POSTE D\'IDENTIFICATION/IDENTIFICATION POST'),0,0,'C');

                $this->Ln(1);
                $this->SetFont('Times', 'B', 18);
                $this->SetTextColor(0,0,0);
                $this->Cell(70,60,utf8_decode('868500'),0,0,'C');
                $this->Cell(80,60,utf8_decode($info["date_delivrance"]),0,0,'C');
                $this->Cell(80,60,utf8_decode('CE21'),0,0,'C');

                $this->Ln(19);
                $this->SetFont('Times', 'B', 12);
                $this->SetTextColor(0,125,0);
                $this->Cell(85,50,utf8_decode('ADRESSE/ADRESS'),0,0,'C');
                $this->Cell(70,50,utf8_decode('DATE D\'EXPIRATION/DATE OF EXPIRY'),0,0,'C');
                $this->Cell(140,50,utf8_decode('IDENTIFICATION UNIQUE/UNIQUE IDENTIFICATION'),0,0,'C');

                $this->Ln(1);
                $this->SetFont('Times', 'B', 18);
                $this->SetTextColor(0,0,0);
                $this->Cell(70,60,utf8_decode('868500'),0,0,'C');
                $this->Cell(80,60,utf8_decode($info["date_delivrance"]),0,0,'C');
                $this->Cell(80,60,utf8_decode($info["numero"].''.$info["id"]),0,0,'C');

                $this->Ln(19);
                $this->SetFont('Times', 'B', 12);
                $this->SetTextColor(0,125,0);
                $this->Cell(280,50,utf8_decode('AUTORITE/AUTHORITY'),0,0,'C');

                $this->Ln(1);
                $this->SetFont('Times', 'B', 18);
                $this->SetTextColor(0,0,0);
                $this->Image('image\auto.png',120,120,50,30);
                $this->Ln(8);
                $this->Cell(280,90,utf8_decode('Martin MBARGA NGUELE'),0,0,'C');
               /*
                $this->SetFont('Times', 'B', 26);
                $this->SetTextColor(31,78,121);
                $this->Cell(34,28,utf8_decode($info["nom"]),0,0,'C');

                $this->SetFont('Times', 'B', 14);
                $this->SetTextColor(0,0,0);
                $this->Cell(45,31,utf8_decode(' né le ' ),0,0,'C');

                $this->SetFont('Times', 'B', 20);
                $this->SetTextColor(31,78,121);
                $this->Cell(-1,29,utf8_decode($info["date_nais"]),0,0,'C');

                $this->SetFont('Times', 'B', 14);
                $this->SetTextColor(0,0,0);
                $this->Cell(95,31,utf8_decode(' a subi et réussi avec succès' ),0,0,'C');

                 $this->Ln(); 
                $this->Cell(95,1,utf8_decode("l'évaluation finale de "),0,0,'C');

                $this->SetFont('Times', 'B', 20);
                $this->SetTextColor(31,78,121);
                $this->Cell(36,0,utf8_decode($info["nom_ue"]),0,0,'C');
                $this->SetFont('Times', 'B', 14);
                $this->SetTextColor(0,0,0);
                $this->Cell(77,1,utf8_decode("de la classe de "),0,0,'C');
                $this->SetFont('Times', 'B', 20);
                $this->SetTextColor(31,78,121);
                $this->Cell(-29,0,utf8_decode($info["classe"]),0,0,'C');
                $this->SetFont('Times', 'B', 14);
                $this->SetTextColor(0,0,0);
                $this->Cell(85,1,utf8_decode("avec la note de "),0,0,'C');

                $this->Ln(); 
                $this->SetFont('Times', 'B', 20);
                $this->SetTextColor(31,78,121);
                $this->Cell(276,25,utf8_decode($info["note"].' / 20'),0,0,'C');

                $this->Ln();
                $this->SetFont('Times', 'B', 14);
                $this->SetTextColor(0,0,0);
                $this->Cell(276,1,utf8_decode('En vertu de quoi la présente certification lui est délivrée.' ),0,0,'C');

                $this->Ln();
                $this->Image('assets\img\certif\cer.png',30,170);

                //$this->SetFont('Courier', 'B', 14);
                //$this->SetTextColor(0,0,0);
                //$this->Cell(430,25,utf8_decode('Daté du ' ),0,0,'C');

                $this->SetTextColor(255,0,34);
                $this->Cell(480,30,date('d-m-y',strtotime((string)$info["date"])),0,0,'C'); */


            }
        }

        $pdf=new myPDF();
        $pdf->AliasNbPages();
        $pdf->AddPage('L','A4',0);
        $pdf->corp($info);
        $pdf->Output();
?>
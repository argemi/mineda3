<html>
<head>
 <script language="JavaScript">
/*  function reqpassword()
  {
  if (document.flogin.parola.value=="") {
   alert("Completati Parola");
   document.flogin.parola.focus();
   return false;
  }
   return true;
  } */
 </script>
 <title>Adaug_Cont_Utilizator</title>
</head>
<body>
<H3>Identificare utilizator</H3>
<?php
//echo validation_errors();  //se scoate afara atunci cand se foloseste form_error() pt plasarea mesajului de eroare
$form_atr=array('name'=>'flogin', 'class' => 'flogincl' );	//creeaza atribute forma
//param lui form_open() indica adresa URL folosita de Submit - adica functia de controler lansata, care va fi aceeasi cu functia care a lansat acest view, adica mnd3_login.php; al doilea param adauga atribute elementului form
echo form_open('mnd3c/login',$form_atr);
?>
  <P>Utilizator:<input type="text" name="user" size="12" value="arba_g"/>  <?php echo form_error('user'); ?> </P>
  <P>Parola: <input type="password" name="parola" size="12" value="ag1234"/> <?php echo form_error('parola'); ?> </P>
  <!--input type="submit" name="btlogin" value="LOGIN" onclick="return reqpassword()" /-->
  <input type="submit" name="btlogin" value="LOGIN" />
  <input type="submit" name="btretrpar" value="Retransmite_parola" />
</form>
</body>
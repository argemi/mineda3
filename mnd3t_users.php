<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="{base_url}/js/mnd3js.js" ></script>
<script type="text/javascript" src="{base_url}/js/jquery-1.11.2.js"></script>
<script language="JavaScript">
var gbase="{base_url}"
</script> 
<link rel="stylesheet" type="text/css" href="{base_url}/css/mnd3ss.css" />
</head>
<!-- BODY -->
<body>
<h2> mnd3t </h2>
<div id="ultp">
<table border='1'>
  <tr>
    <th onclick="fsort(1)">username</th>
    <th onclick="fsort(2)">Nume</th>
    <th onclick="fsort(3)">Email</th>
    <th onclick="fsort(4)">Telefon</th>
    <th onclick="fsort(5)">TipUser</th>
    <th onclick="fsort(6)">GrupaVarsta</th>
  </tr>
  <!--div class="usertable" style="height:80px; overflow:scroll; display:table-row-group;"-->
  <!--<div id="ultp">-->
  <!--tabela propriuzisa-->
  {userlist}
    <tr id={username}>
      <td>{username}</td>
      <td title="{description}">{name}</td> 
      <td>{email}</td> 
      <td>{phone}</td> 
      <td><b>{dentipu}</b></td> 
      <td>{dengrupv}</td>
      <td></td>
    </tr>
  {/userlist}
  <!--</div>-->
  <!-- Randul de filtrare -->
  <tr id="filtrare" style="background-color:green">
  <form name="formfilt">
    <td><input type="text" name="username_filt" title="username_filt" /></td>
    <td><input type="text" name="name_filt" /></td>
    <td><input type="text" name="email_filt" /></td>
    <td><input type="text" name="phone_filt" /></td>
    <td><select name="dentipu_sel">
      <option value="nul"></option>
      {tipulist}
        <option value="{codtipu}">{dentipu}</option>
      {/tipulist}
    </select></td>
    <td><select name="dengrupv_sel">
      <option value="nul"></option>
      {grupvlist}
        <option value="{codgrupv}">{dengrupv}</option>
      {/grupvlist}
    </select></td>
    <td> <input type="Button" onclick="filt()" name="Filtru" value="Filtru" /> </td>
  </form>
  </tr>
</table>
</div>
<input type="Button" onclick="userappend()" value="Adaugare" />
<!--fereatra modala-->
<div id="modaluser">
  <div>
  <form name="formuser">
    <p id="modaltitle" style="text-align:center;">Editare</p>
    <p></p>
    <p>Username<input type="text" name="username" title="username" /></p>
    <p>Nume<input type="text" name="name" /></p>
    <p>Email<input type="text" name="email" /></p>
    <p>Telefon<input type="text" name="phone" /></p>
    <p>Tip User<select name="dentipu_sel">
      {tipulist}
        <option value="{codtipu}">{dentipu}</option>
      {/tipulist}
    </select></p>
    <p>Grupa de varsta<select name="dengrupv_sel">
      {grupvlist}
        <option value="{codgrupv}">{dengrupv}</option>
      {/grupvlist}
    </select></p>
    <p>Descriere User</br>
    <textarea name="description" cols="30" rows="5" ></textarea></p>
    <p> <input type="Button" onclick="userrecord()" name="Inregistreaza" value="Inregistreaza" /> </p>
  </form>
  </div>
</div>

</body>
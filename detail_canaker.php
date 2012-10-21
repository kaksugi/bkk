<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>jQuery UI tabs integration demo</title>

<link rel="stylesheet" type="text/css" media="screen" href="css/jquery-ui.css" />

<script src="lib/jquery.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>

<script id="demo" type="text/javascript">
$(document).ready(function() {
	var tabs = $("#tabs").tabs();
	var validator = $("#signupform").validate({
		groups: {
			birthdate: "birthdateDay birthdateMonth birthdateYear"
		},
		errorPlacement: function(label, element) {
			if (/^birthdate/.test(element[0].name)) {
				label.insertAfter("#birthdateYear");
			} else {
				label.insertAfter(element);
			}
		}
	});
	
	// validate the other two selects when one changes to update the whole group
	var birthdaySelects = $("#birthdateGroup select").click(function() {
		birthdaySelects.not(this).valid();
	})
	
	// overwrite focusInvalid to activate tab with invalid elements
	validator.focusInvalid = function() {
		if( this.settings.focusInvalid ) {
			try {
				var focused = $(this.findLastActive() || this.errorList.length && this.errorList[0].element || []).filter(":visible");
				tabs.tabs("select", tabs.find(">div").index(focused.parent().parent()));
				focused.focus();
			} catch(e) {
				// ignore IE throwing errors when focusing hidden elements
			}
		}
	};
});
</script>

<style>
	body { font-size: 65.2% }
	label { display: inline-block; width: 12em; }
	label.error { color: red; margin-left: 0.5em; width: 25em; }
</style>

</head>
<body>
	
<form id="signupform">
	
<div id="tabs">
		<ul>
			<li><a href="#logindata">Biodata </a></li>
          <li><a href="#subscriptions">Organisasi</a></li>
			<li><a href="#personaldata">Riwayat Pekerjaan</a></li>
			<li><a href="#subscriptions">Keluarga</a></li>
            <li><a href="#subscriptions">Data Prakerin/PKL</a></li>
            <li><a href="#subscriptions">Fisik dan Kesehatan</a></li>
            <li><a href="#subscriptions">Pendidikan Non-Formal</a></li>
            <li><a href="#subscriptions">Prestasi</a></li>
            <li><a href="#subscriptions">Lain-Lain</a></li>
		</ul>
		<div id="logindata">
			<p>&nbsp;</p>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr valign="top">
                <td><p>
                  <label for="username3">NIS</label>
                  <input id="username3" name="username2" class= "required" minlength="3" maxlength="20" type="text" />
                </p>
                  <p>
                    <label for="email3">Nilai Rata-Rata UPK</label>
                    <input id="email3" name="email2" class="required email" type="text" />
                  </p>
                  <p>
                    <label for="password7">Nilai Rata-Rata UN</label>
                    <input name="password3" type="password" class="required" id="password7" minlength="4" maxlength="50" />
                  </p>
                  <p>
                    <label for="confirmpassword10">Nama</label>
                    <input name="confirmpassword3" type="password" class="required" equalTo="#password" id="confirmpassword10" />
                  </p>
                  <p>
                    <label for="password8">Tahun Lulus</label>
                    <input name="password3" type="password" class="required" id="password8" minlength="4" maxlength="50" />
                  </p>
                  <p>
                    <label for="confirmpassword11">Jurusan/Program Studi</label>
                    <input name="confirmpassword3" type="password" class="required" equalTo="#password" id="confirmpassword11" />
                </p>
                <p>
                  <label for="confirmpassword14">No KTP/SIM</label>
                  <input name="confirmpassword" type="password" class="required" equalTo="#password" id="confirmpassword14" />
                </p>
                <p>
                  <label for="password11">Tempat Lahir</label>
                  <input name="password" type="password" class="required" id="password11" minlength="4" maxlength="50" />
                </p>
                <p>
                  <label for="password13">Tanggal Lahir</label>
                  <input name="password2" type="password" class="required" id="password13" minlength="4" maxlength="50" />
                </p></td>
                <td><p>
                  <label for="username4">Agama</label>
                  <input id="username4" name="username3" class= "required" minlength="3" maxlength="20" type="text" />
                </p>
                  <p>
                    <label for="email4">Jenis Kelamin</label>
                    <input id="email4" name="email3" class="required email" type="text" />
                  </p>
                  <p>
                    <label for="password9">Alamat</label>
                    <input name="password4" type="password" class="required" id="password9" minlength="4" maxlength="50" />
                  </p>
                  <p>
                    <label for="confirmpassword12">Kelurahan</label>
                    <input name="confirmpassword4" type="password" class="required" equalTo="#password" id="confirmpassword12" />
                  </p>
                  <p>
                    <label for="password10">Kecamatan</label>
                    <input name="password4" type="password" class="required" id="password10" minlength="4" maxlength="50" />
                  </p>
                  <p>
                    <label for="confirmpassword13">Kode Pos</label>
                    <input name="confirmpassword4" type="password" class="required" equalTo="#password" id="confirmpassword13" />
                </p>
                <p>
                  <label for="confirmpassword16">No Telp/HP</label>
                  <input name="confirmpassword2" type="password" class="required" equalTo="#password" id="confirmpassword16" />
                  </p>
                <p>
                  <label for="confirmpassword16">Email </label>
                  <input name="confirmpassword2" type="password" class="required" equalTo="#password" id="confirmpassword16" />
                </p>
                <p>
                  <label for="confirmpassword17">Pas Photo</label>
                  <input name="confirmpassword2" type="password" class="required" equalTo="#password" id="confirmpassword17" />
                </p></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
          </table>
            
		</div>
		<div id="personaldata">
			<p>
				<label for="street">Street</label>
				<input id="street" name="street" class="required" minlength="3" maxlength="50" type="text" />
			</p>
			<p>
				<label for="city">City</label>
				<input id="city" name="city" class="required" minlength="3" maxlength="50" type="text" />
			</p>
			<p id="birthdateGroup">
				<label for="birthdateDay">Birthdate</label>
				<select id="birthdateDay" name="birthdateDay" class="required">
					<option value="">Day</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>...</option>
				</select>
				<select id="birthdateMonth" name="birthdateMonth" class="required">
					<option value="">Month</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
				</select>
				<select id="birthdateYear" name="birthdateYear" class="required">
					<option value="">Year</option>
					<option>1950</option>
					<option>1951</option>
					<option>1952</option>
					<option>1953</option>
					<option>1954</option>
					<option>1955</option>
					<option>...</option>
				</select>
			</p>
		</div>
		<div id="subscriptions">
			<p>
				<label for="weekly">Weekly Newsletter</label>
				<input id="weekly" name="weekly" type="checkbox" />
			</p>
			<p>
				<label for="updates">Product Updates</label>
				<input id="updates" name="updates" type="checkbox" />
			</p>
			<p>
				<label for="terms">Terms and conditions</label>
				<input id="terms" name="terms" class="required" type="checkbox" />
			</p>
		</div>
	</div>

	<input type="submit" />
</form>




</body>
</html>
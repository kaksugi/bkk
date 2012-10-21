<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<SCRIPT>
    function cekForm() {
        if (document.fValidate.txtNama.value == "") {
            alert("Nama tidak boleh kosong");
            document.forms['fValidate'].txtNama.focus();
            return false;
        } else if (document.fValidate.txtAlamat.value == "") {
            alert("Alamat tidak boleh kosong");
            document.forms['fValidate'].txtAlamat.focus();
            return false;
        } else if (!document.fValidate.sex[0].checked && !document.fValidate.sex[1].checked) {
            alert("Pilih Jenis Kelamin");
            return false;
        } else if (document.fValidate.cmb_kota.selectedIndex == 0) {
            alert("Pilih kota asal");
            document.forms['fValidate'].cmb_kota.focus();
            return false;
        } else if (!document.fValidate.agree.checked) {
            alert("Anda belum menyetujui bahwa data anda benar!");
            return false;
        } else {
            document.fValidate.submit();
        }
    }
</SCRIPT>
<title>Untitled Document</title>
</head>

<body>

<FORM name="fValidate">
<table>
    <tr>
        <td>Nama</td>
        <td>: <input type="text" name="txtNama" id="txtNama" value=""></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: <textarea name="txtAlamat"></textarea></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>: <input type="radio" name="sex" value="1">Pria  <input type="radio" name="sex" value="2">Wanita</td>
    </tr>
    <tr>
        <td>Kota Asal</td>
        <td>: <select name="cmb_kota">
                <option value=""> Pilih Kota </option>
                <option value="bdg"> Bandung </option>
                <option value="jkt"> Jakarta </option>
                <option value="sby"> Surabaya </option>
                <option value="ygy"> Yogyakarta </option>
              </select>
        </td>
    </tr>
    <tr>
        <td colspan="2"><input type="checkbox" name="agree" id="agree" value="1"> Saya menyetujui bahwa data diatas benar adanya</td>
    </tr>
    <tr>
        <td colspan="2"><input type="button" name="button-ok" value="Simpan" onclick="cekForm()"></td>
    </tr>
</table>
</FORM>
</body>
</html>
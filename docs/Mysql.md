# works with mysql[i]

You can connect to database for add , delete , edit and more.... Now follow me😜

<h5>How to create Mysql Database ? </h5>

<h6>Log into your <sup>cPanel</sup>.

Click the <sup>MySQL Database Wizard</sup> under the Databases heading.


Next to New Database enter a name for your database and click Next Step.

</h6>

<b>WARNING: If you receive an error message regarding the limited number of databases available, you may consider upgrading your Business Class Hosting plan.</b>

<h6>
Next to <sup>Username</sup> enter a username.
Enter a password next to <sup>Password</sup>

enter it again for <sup>Password</sup> (Again) and then click <sup>Create User</sup>.


On the next page, you'll assign privileges for the user to the database. Check the box next to <sup>All Privileges</sup> and then click <sup>Next Step</sup>
</h6>

<img src="http://uupload.ir/files/m2pw_img_20181207_095453.jpg" alt="MySql"/> 

<b>connect to database 🔘</b>
<pre>$MonsterM = new TGX_Mysql($host,$username,$password);</pre>
<b>For Example: </b>
<pre>$MonsterM = new TGX_Mysql('monsters.ir','monsters_test','123456789');</pre>

<b>Set Table For Work</b>
<pre>$MonsterM->SetTable("table_name");

<b>Create Table</b>
<pre>$MonsterM->CreateTable();</pre>

<b>Check Exist Table</b>
<pre>$MonsterM->TableExists();</pre>

<b> For Example : (Create Table)</b>
<pre>
$MonsterM->SetTable("users");
if(!$MonsterM->TableExists()){
$MonsterM->CreateTable();
}
</pre>

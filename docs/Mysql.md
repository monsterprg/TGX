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
<pre>$MonsterM->SetTable("table_name");</pre>

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

<b>Get all Column Value</b>
<pre>$MonsterM->IDS();</pre>

<b>Get value of column</b>
<pre>$MonsterM->Get($key, $key2, $value2);</pre>
<b>For Example :</b> (123456789 = chat_id)
<pre>$MonsterM->Get("coins", "chat_id", 123456789);</pre>

<b>Put Column value</b>
<pre>$MonsterM->Put("coins", 10000, "chat_id", 123456789);</pre>

<b>Adding profile to manage (for example: chat_id)</b>
<pre>$MonsterM->AddCustomProfile('chat_id', 123456789);</pre>

<b>Deleting profile (all data profile delete)</b>
<pre>$MonsterM->DelCustomProfile('chat_id', 123456789);</pre>

<b>Add column</b>
<pre>$MonsterM->AddColumn($columm, $definition);</pre>
<b>For Example :</b>
<pre>
$MonsterM->AddColumm('chat_id', 'INT');
$MonsterM->AddColumm('name', 'TEXT');
</pre>
<a href="https://www.w3schools.com/sql/sql_datatypes.asp">definition list</a>

<b>Add new value at the beginning of the table (Similar AddCustomProfile)<b>
<pre>$MonsterM->PutNoWhere("chat_id", 123456789);</pre>
  
<b>Sum the values of a column</b>
<pre>$MonsterM->SUM($column);</pre>

<b>Get Count of a column</b>
</pre>$MonsterM->COUNT($column);

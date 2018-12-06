
# Work with json

You can work with json for save data

<b> Start Work 🔘 </b>
<pre>$MonsterJ = new TGX_JsonData();</pre>

<b> Set Chat ID for work user data</b>
<pre>$MonsterJ->SetChatID();</pre>

<b> Set NameFile for save data </b>
<pre>$MonsterJ->SetNameFile("users.json");</pre>

<b> Create File (need to set namefile with SetNameFile("NameFile.json") </b>
<pre>$MonsterJ->Create();</pre>

<b> add User for save data </b>
<pre>$MonsterJ->AddUser();</pre>

<b> Check Exists User </b>
<pre>$MonsterJ->ExistsUser();</pre>

<b> Delete User (All data delete) </b>
<pre>$MonsterJ->DeleteUser();</pre>

<b> Get all user data </b>
<pre>$MonsterJ->GetUser();</pre>

<b> Get value of key </b>
<pre>$MonsterJ->GetKey($keyname)</pre>

<b> Add key for set value </b>
<pre>$MonsterJ->AddKey("coin");</pre>

<b> Put value in key </b>
<pre>$MonsterJ->PutKey($key, $value);</pre>

<b> Delete key (all keys ChatID, delete) </b>
<pre>$MonsterJ->DelKey($key);</pre>

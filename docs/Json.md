
# Work with json

You can work with json for save data

<bold> Start Work 🔘 </bold>
<pre>$MonsterJ = new TGX_JsonData();</pre>

<bold> Set Chat ID for work user data</bold>
<pre>$MonsterJ->SetChatID();</pre>

<bold> Set NameFile for save data </bold>
<pre>$MonsterJ->SetNameFile("users.json");</pre>

<bold> Create File (need to set namefile with SetNameFile("NameFile.json") </bold>
<pre>$MonsterJ->Create();</pre>

<bold> add User for save data </bold>
<pre>$MonsterJ->AddUser();</pre>

<bold> Check Exists User </bold>
<pre>$MonsterJ->ExistsUser();</pre>

<bold> Delete User (All data delete) </bold>
<pre>$MonsterJ->DeleteUser();</pre>

<bold> Get all user data </bold>
<pre>$MonsterJ->GetUser();</pre>

<bold> Get value of key </bold>
<pre>$MonsterJ->GetKey($keyname)</pre>

<bold> Add key for set value </bold>
<pre>$MonsterJ->AddKey("coin");</pre>

<bold> Put value in key </bold>
<pre>$MonsterJ->PutKey($key, $value);</pre>

<bold> Delete key (all keys ChatID, delete) </bold>
<pre>$MonsterJ->DelKey($key);</pre>

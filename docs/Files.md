# Woring With Files

You can use class for work with files

<b> Start Work 🔘 </b>
<pre>$MonsterF = new TGX_Files();</pre>

<b> if you need create file use this 👇 </b>
<pre>$MonsterF->CreateFile($namefile,$value = null);</pre>

<b> Write in file (Deleted previous text) </b>
<pre>$MonsterF->PutFile("Hello World 👌");</pre>

<b> Delete File </b>
<pre>$MonsterF->UnFile($namefile);</pre>

<b> Read File </b>
<pre>$MonsterF->ReadFile($namefile);</pre>

<b> Create Folder </b>
<pre>$MonsterF->CreateFolder($name);</pre>

<b> Check Exists File </b>
<pre>$MonsterF->FileExists($namefile);</pre>

<b> Check Exists Folder </b>
<pre>$MonsterF->FolderExists($namefolder);</pre>

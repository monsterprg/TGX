# Woring With Files

You can use class for work with files

<bold> Start Work 🔘 </bold>
<pre>$MonsterF = new TGX_Files();</pre>

<bold> if you need create file use this 👇 </bold>
<pre>$MonsterF->CreateFile($namefile,$value = null);</pre>

<bold> Write in file (Deleted previous text) </bold>
<pre>$MonsterF->PutFile("Hello World 👌");</pre>

<bold> Delete File </bold>
<pre>$MonsterF->UnFile($namefile);</pre>

<bold> Read File </bold>
<pre>$MonsterF->ReadFile($namefile);</pre>

<bold> Create Folder </bold>
<pre>$MonsterF->CreateFolder($name);</pre>

<bold> Check Exists File </bold>
<pre>$MonsterF->FileExists($namefile);</pre>

<bold> Check Exists Folder </bold>
<pre>$MonsterF->FolderExists($namefolder);</pre>

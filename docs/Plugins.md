# Work with plugins

<a href="https://en.m.wikipedia.org/wiki/Plug-in_(computing)"> What is plug-in? </a>

you can add plugin in folder config/plugins

<b> Start Work 🔘 </b>
<pre>$MonsterP = new TGX_plugins(array filenames = []);</pre>
<h6> Examples : </h6>
<pre>$MonsterP = new TGX_plugins(['functions.php','config.php']);

<b> Load Folder plugin 👇 </b>
<pre>$MonsterP->PluginLoad($folder, $file);</pre>
<h4> A guide to working with the above function 👇 </h6>
<h5> What is $folder ? </h5>
<h6> Enter the folder name in which you have the plugin 😎👌 </h6>
<h5> What is $file ? </h5>
<h6> The original file name that attaches to other items in the folder (main file this plugin) ❇ </h6>


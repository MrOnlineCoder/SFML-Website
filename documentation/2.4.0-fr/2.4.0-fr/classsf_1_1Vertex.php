<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Vertex Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.12 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
$(function() {
  initMenu('',false,false,'search.php','Search');
});
</script>
<div id="main-nav"></div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Vertex.php">Vertex</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="classsf_1_1Vertex-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Vertex Class Reference<div class="ingroups"><a class="el" href="group__graphics.php">Graphics module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Define a point with color and texture coordinates.  
 <a href="classsf_1_1Vertex.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="include_2SFML_2Graphics_2Vertex_8hpp_source.php">Vertex.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a6b4c79cd69f7ec1296fede536f39e9c8"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Vertex.php#a6b4c79cd69f7ec1296fede536f39e9c8">Vertex</a> ()</td></tr>
<tr class="memdesc:a6b4c79cd69f7ec1296fede536f39e9c8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a6b4c79cd69f7ec1296fede536f39e9c8">More...</a><br /></td></tr>
<tr class="separator:a6b4c79cd69f7ec1296fede536f39e9c8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4dccc5c351b73b6fac169fe442535b40"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Vertex.php#a4dccc5c351b73b6fac169fe442535b40">Vertex</a> (const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;thePosition)</td></tr>
<tr class="memdesc:a4dccc5c351b73b6fac169fe442535b40"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the vertex from its position.  <a href="#a4dccc5c351b73b6fac169fe442535b40">More...</a><br /></td></tr>
<tr class="separator:a4dccc5c351b73b6fac169fe442535b40"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a70b0679b4ec531d5bd1a7d0225c7321a"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Vertex.php#a70b0679b4ec531d5bd1a7d0225c7321a">Vertex</a> (const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;thePosition, const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;theColor)</td></tr>
<tr class="memdesc:a70b0679b4ec531d5bd1a7d0225c7321a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the vertex from its position and color.  <a href="#a70b0679b4ec531d5bd1a7d0225c7321a">More...</a><br /></td></tr>
<tr class="separator:a70b0679b4ec531d5bd1a7d0225c7321a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab9bf849c4c0d82d09bf5bece23d2456a"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Vertex.php#ab9bf849c4c0d82d09bf5bece23d2456a">Vertex</a> (const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;thePosition, const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;theTexCoords)</td></tr>
<tr class="memdesc:ab9bf849c4c0d82d09bf5bece23d2456a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the vertex from its position and texture coordinates.  <a href="#ab9bf849c4c0d82d09bf5bece23d2456a">More...</a><br /></td></tr>
<tr class="separator:ab9bf849c4c0d82d09bf5bece23d2456a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad5943f2b3cbc64b6e714bb37ccaf4960"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Vertex.php#ad5943f2b3cbc64b6e714bb37ccaf4960">Vertex</a> (const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;thePosition, const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;theColor, const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;theTexCoords)</td></tr>
<tr class="memdesc:ad5943f2b3cbc64b6e714bb37ccaf4960"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the vertex from its position, color and texture coordinates.  <a href="#ad5943f2b3cbc64b6e714bb37ccaf4960">More...</a><br /></td></tr>
<tr class="separator:ad5943f2b3cbc64b6e714bb37ccaf4960"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6b4c79cd69f7ec1296fede536f39e9c8"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Vertex.php#a6b4c79cd69f7ec1296fede536f39e9c8">Vertex</a> ()</td></tr>
<tr class="memdesc:a6b4c79cd69f7ec1296fede536f39e9c8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a6b4c79cd69f7ec1296fede536f39e9c8">More...</a><br /></td></tr>
<tr class="separator:a6b4c79cd69f7ec1296fede536f39e9c8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4dccc5c351b73b6fac169fe442535b40"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Vertex.php#a4dccc5c351b73b6fac169fe442535b40">Vertex</a> (const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;thePosition)</td></tr>
<tr class="memdesc:a4dccc5c351b73b6fac169fe442535b40"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the vertex from its position.  <a href="#a4dccc5c351b73b6fac169fe442535b40">More...</a><br /></td></tr>
<tr class="separator:a4dccc5c351b73b6fac169fe442535b40"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a70b0679b4ec531d5bd1a7d0225c7321a"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Vertex.php#a70b0679b4ec531d5bd1a7d0225c7321a">Vertex</a> (const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;thePosition, const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;theColor)</td></tr>
<tr class="memdesc:a70b0679b4ec531d5bd1a7d0225c7321a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the vertex from its position and color.  <a href="#a70b0679b4ec531d5bd1a7d0225c7321a">More...</a><br /></td></tr>
<tr class="separator:a70b0679b4ec531d5bd1a7d0225c7321a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab9bf849c4c0d82d09bf5bece23d2456a"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Vertex.php#ab9bf849c4c0d82d09bf5bece23d2456a">Vertex</a> (const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;thePosition, const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;theTexCoords)</td></tr>
<tr class="memdesc:ab9bf849c4c0d82d09bf5bece23d2456a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the vertex from its position and texture coordinates.  <a href="#ab9bf849c4c0d82d09bf5bece23d2456a">More...</a><br /></td></tr>
<tr class="separator:ab9bf849c4c0d82d09bf5bece23d2456a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad5943f2b3cbc64b6e714bb37ccaf4960"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Vertex.php#ad5943f2b3cbc64b6e714bb37ccaf4960">Vertex</a> (const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;thePosition, const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;theColor, const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;theTexCoords)</td></tr>
<tr class="memdesc:ad5943f2b3cbc64b6e714bb37ccaf4960"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the vertex from its position, color and texture coordinates.  <a href="#ad5943f2b3cbc64b6e714bb37ccaf4960">More...</a><br /></td></tr>
<tr class="separator:ad5943f2b3cbc64b6e714bb37ccaf4960"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:a8a4e0f4dfa7f1eb215c92e93d04f0ac0"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Vector2.php">Vector2f</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Vertex.php#a8a4e0f4dfa7f1eb215c92e93d04f0ac0">position</a></td></tr>
<tr class="memdesc:a8a4e0f4dfa7f1eb215c92e93d04f0ac0"><td class="mdescLeft">&#160;</td><td class="mdescRight">2D position of the vertex  <a href="#a8a4e0f4dfa7f1eb215c92e93d04f0ac0">More...</a><br /></td></tr>
<tr class="separator:a8a4e0f4dfa7f1eb215c92e93d04f0ac0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a799faa0629442e90f07cd2edb568ff80"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Color.php">Color</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Vertex.php#a799faa0629442e90f07cd2edb568ff80">color</a></td></tr>
<tr class="memdesc:a799faa0629442e90f07cd2edb568ff80"><td class="mdescLeft">&#160;</td><td class="mdescRight"><a class="el" href="classsf_1_1Color.php" title="Utility class for manipulating RGBA colors. ">Color</a> of the vertex.  <a href="#a799faa0629442e90f07cd2edb568ff80">More...</a><br /></td></tr>
<tr class="separator:a799faa0629442e90f07cd2edb568ff80"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9e79bd05818d36c4789751908037097c"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Vector2.php">Vector2f</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Vertex.php#a9e79bd05818d36c4789751908037097c">texCoords</a></td></tr>
<tr class="memdesc:a9e79bd05818d36c4789751908037097c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Coordinates of the texture's pixel to map to the vertex.  <a href="#a9e79bd05818d36c4789751908037097c">More...</a><br /></td></tr>
<tr class="separator:a9e79bd05818d36c4789751908037097c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Define a point with color and texture coordinates. </p>
<p>A vertex is an improved point.</p>
<p>It has a position and other extra attributes that will be used for drawing: in SFML, vertices also have a color and a pair of texture coordinates.</p>
<p>The vertex is the building block of drawing. Everything which is visible on screen is made of vertices. They are grouped as 2D primitives (triangles, quads, ...), and these primitives are grouped to create even more complex 2D entities such as sprites, texts, etc.</p>
<p>If you use the graphical entities of SFML (sprite, text, shape) you won't have to deal with vertices directly. But if you want to define your own 2D entities, such as tiled maps or particle systems, using vertices will allow you to get maximum performances.</p>
<p>Example: </p><div class="fragment"><div class="line"><span class="comment">// define a 100x100 square, red, with a 10x10 texture mapped on it</span></div><div class="line"><a class="code" href="classsf_1_1Vertex.php">sf::Vertex</a> vertices[] =</div><div class="line">{</div><div class="line">    <a class="code" href="classsf_1_1Vertex.php">sf::Vertex</a>(<a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>(  0,   0), <a class="code" href="classsf_1_1Color.php#a7052b1c5408a953e25f9691e0e828c9d">sf::Color::Red</a>, <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>( 0,  0)),</div><div class="line">    <a class="code" href="classsf_1_1Vertex.php">sf::Vertex</a>(<a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>(  0, 100), <a class="code" href="classsf_1_1Color.php#a7052b1c5408a953e25f9691e0e828c9d">sf::Color::Red</a>, <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>( 0, 10)),</div><div class="line">    <a class="code" href="classsf_1_1Vertex.php">sf::Vertex</a>(<a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>(100, 100), <a class="code" href="classsf_1_1Color.php#a7052b1c5408a953e25f9691e0e828c9d">sf::Color::Red</a>, <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>(10, 10)),</div><div class="line">    <a class="code" href="classsf_1_1Vertex.php">sf::Vertex</a>(<a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>(100,   0), <a class="code" href="classsf_1_1Color.php#a7052b1c5408a953e25f9691e0e828c9d">sf::Color::Red</a>, <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>(10,  0))</div><div class="line">};</div><div class="line"></div><div class="line"><span class="comment">// draw it</span></div><div class="line">window.draw(vertices, 4, <a class="code" href="group__graphics.php#gga5ee56ac1339984909610713096283b1bac968add05250b2cf59350dc68043a3c0">sf::Quads</a>);</div></div><!-- fragment --><p>Note: although texture coordinates are supposed to be an integer amount of pixels, their type is float because of some buggy graphics drivers that are not able to process integer coordinates correctly.</p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1VertexArray.php" title="Define a set of one or more 2D primitives. ">sf::VertexArray</a> </dd></dl>

<p>Definition at line <a class="el" href="include_2SFML_2Graphics_2Vertex_8hpp_source.php#l00042">42</a> of file <a class="el" href="include_2SFML_2Graphics_2Vertex_8hpp_source.php">include/SFML/Graphics/Vertex.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a6b4c79cd69f7ec1296fede536f39e9c8"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a6b4c79cd69f7ec1296fede536f39e9c8">&sect;&nbsp;</a></span>Vertex() <span class="overload">[1/10]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Vertex::Vertex </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>

</div>
</div>
<a id="a4dccc5c351b73b6fac169fe442535b40"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a4dccc5c351b73b6fac169fe442535b40">&sect;&nbsp;</a></span>Vertex() <span class="overload">[2/10]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Vertex::Vertex </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;&#160;</td>
          <td class="paramname"><em>thePosition</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the vertex from its position. </p>
<p>The vertex color is white and texture coordinates are (0, 0).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">thePosition</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> position </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a70b0679b4ec531d5bd1a7d0225c7321a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a70b0679b4ec531d5bd1a7d0225c7321a">&sect;&nbsp;</a></span>Vertex() <span class="overload">[3/10]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Vertex::Vertex </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;&#160;</td>
          <td class="paramname"><em>thePosition</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;&#160;</td>
          <td class="paramname"><em>theColor</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the vertex from its position and color. </p>
<p>The texture coordinates are (0, 0).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">thePosition</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> position </td></tr>
    <tr><td class="paramname">theColor</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> color </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="ab9bf849c4c0d82d09bf5bece23d2456a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab9bf849c4c0d82d09bf5bece23d2456a">&sect;&nbsp;</a></span>Vertex() <span class="overload">[4/10]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Vertex::Vertex </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;&#160;</td>
          <td class="paramname"><em>thePosition</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;&#160;</td>
          <td class="paramname"><em>theTexCoords</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the vertex from its position and texture coordinates. </p>
<p>The vertex color is white.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">thePosition</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> position </td></tr>
    <tr><td class="paramname">theTexCoords</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> texture coordinates </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="ad5943f2b3cbc64b6e714bb37ccaf4960"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad5943f2b3cbc64b6e714bb37ccaf4960">&sect;&nbsp;</a></span>Vertex() <span class="overload">[5/10]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Vertex::Vertex </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;&#160;</td>
          <td class="paramname"><em>thePosition</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;&#160;</td>
          <td class="paramname"><em>theColor</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;&#160;</td>
          <td class="paramname"><em>theTexCoords</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the vertex from its position, color and texture coordinates. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">thePosition</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> position </td></tr>
    <tr><td class="paramname">theColor</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> color </td></tr>
    <tr><td class="paramname">theTexCoords</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> texture coordinates </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a6b4c79cd69f7ec1296fede536f39e9c8"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a6b4c79cd69f7ec1296fede536f39e9c8">&sect;&nbsp;</a></span>Vertex() <span class="overload">[6/10]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Vertex::Vertex </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>

</div>
</div>
<a id="a4dccc5c351b73b6fac169fe442535b40"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a4dccc5c351b73b6fac169fe442535b40">&sect;&nbsp;</a></span>Vertex() <span class="overload">[7/10]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Vertex::Vertex </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;&#160;</td>
          <td class="paramname"><em>thePosition</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the vertex from its position. </p>
<p>The vertex color is white and texture coordinates are (0, 0).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">thePosition</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> position </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a70b0679b4ec531d5bd1a7d0225c7321a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a70b0679b4ec531d5bd1a7d0225c7321a">&sect;&nbsp;</a></span>Vertex() <span class="overload">[8/10]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Vertex::Vertex </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;&#160;</td>
          <td class="paramname"><em>thePosition</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;&#160;</td>
          <td class="paramname"><em>theColor</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the vertex from its position and color. </p>
<p>The texture coordinates are (0, 0).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">thePosition</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> position </td></tr>
    <tr><td class="paramname">theColor</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> color </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="ab9bf849c4c0d82d09bf5bece23d2456a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab9bf849c4c0d82d09bf5bece23d2456a">&sect;&nbsp;</a></span>Vertex() <span class="overload">[9/10]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Vertex::Vertex </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;&#160;</td>
          <td class="paramname"><em>thePosition</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;&#160;</td>
          <td class="paramname"><em>theTexCoords</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the vertex from its position and texture coordinates. </p>
<p>The vertex color is white.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">thePosition</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> position </td></tr>
    <tr><td class="paramname">theTexCoords</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> texture coordinates </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="ad5943f2b3cbc64b6e714bb37ccaf4960"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad5943f2b3cbc64b6e714bb37ccaf4960">&sect;&nbsp;</a></span>Vertex() <span class="overload">[10/10]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Vertex::Vertex </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;&#160;</td>
          <td class="paramname"><em>thePosition</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;&#160;</td>
          <td class="paramname"><em>theColor</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector2.php">Vector2f</a> &amp;&#160;</td>
          <td class="paramname"><em>theTexCoords</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the vertex from its position, color and texture coordinates. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">thePosition</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> position </td></tr>
    <tr><td class="paramname">theColor</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> color </td></tr>
    <tr><td class="paramname">theTexCoords</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> texture coordinates </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a id="a799faa0629442e90f07cd2edb568ff80"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a799faa0629442e90f07cd2edb568ff80">&sect;&nbsp;</a></span>color</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Color.php">Color</a> sf::Vertex::color</td>
        </tr>
      </table>
</div><div class="memdoc">

<p><a class="el" href="classsf_1_1Color.php" title="Utility class for manipulating RGBA colors. ">Color</a> of the vertex. </p>

<p>Definition at line <a class="el" href="include_2SFML_2Graphics_2Vertex_8hpp_source.php#l00098">98</a> of file <a class="el" href="include_2SFML_2Graphics_2Vertex_8hpp_source.php">include/SFML/Graphics/Vertex.hpp</a>.</p>

</div>
</div>
<a id="a8a4e0f4dfa7f1eb215c92e93d04f0ac0"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a8a4e0f4dfa7f1eb215c92e93d04f0ac0">&sect;&nbsp;</a></span>position</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Vector2.php">Vector2f</a> sf::Vertex::position</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>2D position of the vertex </p>

<p>Definition at line <a class="el" href="include_2SFML_2Graphics_2Vertex_8hpp_source.php#l00097">97</a> of file <a class="el" href="include_2SFML_2Graphics_2Vertex_8hpp_source.php">include/SFML/Graphics/Vertex.hpp</a>.</p>

</div>
</div>
<a id="a9e79bd05818d36c4789751908037097c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a9e79bd05818d36c4789751908037097c">&sect;&nbsp;</a></span>texCoords</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Vector2.php">Vector2f</a> sf::Vertex::texCoords</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Coordinates of the texture's pixel to map to the vertex. </p>

<p>Definition at line <a class="el" href="include_2SFML_2Graphics_2Vertex_8hpp_source.php#l00099">99</a> of file <a class="el" href="include_2SFML_2Graphics_2Vertex_8hpp_source.php">include/SFML/Graphics/Vertex.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="include_2SFML_2Graphics_2Vertex_8hpp_source.php">include/SFML/Graphics/Vertex.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
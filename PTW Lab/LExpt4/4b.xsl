<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<xsl:template match="student">
<html>
<body>
<div style="color:blue; font-size: 35pt; display: block;">
	<xsl:value-of select="usn"/><br/>
	<xsl:value-of select="Name"/><br/>
	<xsl:value-of select="N-college"/><br/>
	<xsl:value-of select="year"/><br/>
	<xsl:value-of select="branch"/><br/>
	<xsl:value-of select="email"/>
</div>
</body>
</html>
</xsl:template>
</xsl:stylesheet>


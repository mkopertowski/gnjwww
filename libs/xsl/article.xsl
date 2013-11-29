<?xml version='1.0'?> 
<xsl:stylesheet 
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version='1.0'> 
     
    <xsl:output method="html"/> 
    <xsl:template match="article"> 

          <h1><xsl:value-of select="title"/></h1> 

          <B><P align="right"><xsl:value-of select="date/day"/> <xsl:text>. </xsl:text>
                        <xsl:if test="date/month=1"> <xsl:text>Styczeń </xsl:text> </xsl:if>
                        <xsl:if test="date/month=2"> <xsl:text>Luty </xsl:text> </xsl:if>
                        <xsl:if test="date/month=3"> <xsl:text>Marzec </xsl:text> </xsl:if>
                        <xsl:if test="date/month=4"> <xsl:text>Kwiecień </xsl:text> </xsl:if>
                        <xsl:if test="date/month=5"> <xsl:text>Maj </xsl:text> </xsl:if>
                        <xsl:if test="date/month=6"> <xsl:text>Czerwiec </xsl:text> </xsl:if>
                        <xsl:if test="date/month=7"> <xsl:text>Lipiec </xsl:text> </xsl:if>
                        <xsl:if test="date/month=8"> <xsl:text>Sierpień </xsl:text> </xsl:if>
                        <xsl:if test="date/month=9"> <xsl:text>Wrzesień </xsl:text> </xsl:if>
                        <xsl:if test="date/month=10"> <xsl:text>Październik </xsl:text> </xsl:if>
                        <xsl:if test="date/month=11"> <xsl:text>Listopad </xsl:text> </xsl:if>
                        <xsl:if test="date/month=12"> <xsl:text>Grudzień </xsl:text> </xsl:if>
                        <xsl:value-of select="date/year"/>
          </P></B> 

          <xsl:apply-templates select="section"/> 

          <BR/><B><P align="right"><xsl:text>Tekst: </xsl:text> <xsl:value-of select="author"/> </P></B> 
          <P class="article"><xsl:value-of select="note"/></P>

          <xsl:apply-templates select="seesection"/> 

    </xsl:template> 

<!-- SECTION ************************************************************** -->
     
    <xsl:template match="section"> 
        <xsl:apply-templates/> 
    </xsl:template> 
         
        <xsl:template match="section/title"> 
          <h2><xsl:value-of select="."/></h2> 
        </xsl:template> 
     
<!-- PARA ***************************************************************** -->

  <xsl:template match="para"> 
    <P class="article"><xsl:apply-templates/></P> 
  </xsl:template> 

<!-- LINK ***************************************************************** -->

  <xsl:variable name="dir"><xsl:value-of select="article/sec"/>/<xsl:value-of select="article/id"/>/</xsl:variable>

  <xsl:template match="link">
    <a class="navi">
      <xsl:if test="file">
        <xsl:attribute name="href">
          <xsl:value-of select="$dir"/>
          <xsl:value-of select="file"/>
        </xsl:attribute>
      </xsl:if>
      <xsl:if test="href">
        <xsl:attribute name="href">
          <xsl:value-of select="href"/>
        </xsl:attribute>
      </xsl:if>
      <xsl:value-of select="caption"/>
    </a> 
  </xsl:template> 

<!-- IMAGE ***************************************************************** -->

  <xsl:template match="image">

    <xsl:variable name="height">
      <xsl:choose>
        <xsl:when test="layout='h'">266</xsl:when>
        <xsl:otherwise>200</xsl:otherwise>
      </xsl:choose>
    </xsl:variable>

    <xsl:variable name="width">
      <xsl:choose>
        <xsl:when test="layout='h'">200</xsl:when>
        <xsl:otherwise>266</xsl:otherwise>
      </xsl:choose>
    </xsl:variable>

    <xsl:variable name="class">
      <xsl:choose>
        <xsl:when test="align='left'">articleleftimage</xsl:when>
        <xsl:when test="align='right'">articlerightimage</xsl:when>
        <xsl:when test="align='center'">articlecenterimage</xsl:when>
        <xsl:otherwise>articlecenterimage</xsl:otherwise>
      </xsl:choose>
    </xsl:variable>

    <xsl:variable name="img">
      <img border="0" alt="">
        <xsl:attribute name="src"><xsl:value-of select="$dir"/>small/<xsl:value-of select="file"/></xsl:attribute>
        <xsl:attribute name="height"><xsl:value-of select="$height"/></xsl:attribute>
        <xsl:attribute name="width"><xsl:value-of select="$width"/></xsl:attribute>
      </img>
    </xsl:variable>

    <xsl:variable name="imgtable">
      <table>
        <xsl:attribute name="class"><xsl:value-of select="$class"/></xsl:attribute>
        <tr>
          <td align="center">
            <xsl:choose>
              <xsl:when test="big='yes'">
                <a class="image2">
                  <xsl:attribute name="href">javascript:open_click('<xsl:value-of select="$dir"/><xsl:value-of select="file"/>',3*<xsl:value-of select="$height"/>,3*<xsl:value-of select="$width"/>)</xsl:attribute>
                  <xsl:copy-of select="$img"/>
                </a>
              </xsl:when>
              <xsl:otherwise>
                  <xsl:copy-of select="$img"/>
              </xsl:otherwise>
            </xsl:choose>

          </td>
        </tr>

        <tr height="3">
	  <td>
          </td>
        </tr>

        <tr>
          <td align="center">
            <i> <xsl:value-of select="caption"/> </i>
          </td>
        </tr>

       </table> 

    </xsl:variable>

    <xsl:choose>
      <xsl:when test="align='left'"><xsl:copy-of select="$imgtable"/></xsl:when>
      <xsl:when test="align='right'"><xsl:copy-of select="$imgtable"/></xsl:when>
      <xsl:when test="align='center'">
          <div align="center"><xsl:copy-of select="$imgtable"/></div>
      </xsl:when>
      <xsl:otherwise>
          <td align="center"><xsl:copy-of select="$imgtable"/></td>
      </xsl:otherwise>
    </xsl:choose>

  </xsl:template> 

<!-- IMAGEINROW ***************************************************************** -->

  <xsl:template match="imageinrow"> 
    <TABLE align="center" width="80%"><xsl:apply-templates/></TABLE>
  </xsl:template> 


<!-- LIST *********************************************************************** -->

  <xsl:template match="list"> 
    <UL class="article"><xsl:apply-templates/></UL>
  </xsl:template> 

  <xsl:template match="item"> 
    <LI class="article"><xsl:apply-templates/></LI>
  </xsl:template> 

<!-- SEESECTION ***************************************************************** -->
     
    <xsl:template match="seesection"> 
        <xsl:apply-templates/> 
    </xsl:template> 
         
    <xsl:template match="seesection/title"> 
       <B><P class="article"><xsl:value-of select="."/></P></B> 
    </xsl:template> 

</xsl:stylesheet>

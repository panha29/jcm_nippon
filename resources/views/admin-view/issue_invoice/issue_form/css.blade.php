<style>
    /* reset */



/* content editable */



span[contenteditable] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%;}
table { border-collapse: collapse; border-spacing: 2px;}

th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

.html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
.html { background: #999; cursor: default; }

.body { box-sizing: border-box; height: 11in; overflow: hidden; padding: 0.5in; width: 8.5in; }
/* .body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; } */
/* .body { box-sizing: border-box; height: 8.3in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 5.8in; } */

/* header */

header { margin: 0 0 1em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: red; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 0em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; margin: auto; }
/* header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; } */
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 0.4em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }

}


.labelm{
    font-size: 12px;
    font-weight: 550;
    font-family: 'Nokora', sans-serif;
    line-height: 25px;
}
.labelkh{
    font-size: 16px;
    font-weight: 550;
    font-family: 'Nokora', sans-serif;
}
.labelkh1{
    vertical-align: middle;
    line-height: normal;
    font-size: 13px;
    font-weight: 550;
    font-family: 'Nokora', sans-serif;
}

@page { margin: 0; }

.cs-invoice_btns {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  /* margin-top: 30px; */
}

.cs-invoice_btns .cs-invoice_btn:first-child {
  border-radius: 10px;
}

.cs-invoice_btns .cs-invoice_btn:last-child {
  border-radius: 10px;
}

.cs-invoice_btn {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border: none;
  font-weight: 600;
  padding: 8px 20px;
  cursor: pointer;
}

.cs-invoice_btn svg {
  width: 24px;
  margin-right: 5px;
}

.cs-invoice_btn.cs-color1 {
  color: #111111;
  background: rgba(42, 209, 157, 0.15);
}

.cs-invoice_btn.cs-color1:hover {
  background-color: rgba(42, 209, 157, 0.3);
}

.cs-invoice_btn.cs-color2 {
  color: #fff;
  background: #2ad19d;
}

.cs-invoice_btn.cs-color2:hover {
  background-color: rgba(42, 209, 157, 0.8);
}
@media print {
  .cs-hide_print {
    display: none !important;
  }
}
.image-display {
    border-radius: 15px;
    width: 170px;
    height: 225px;
    vertical-align: top;
}

.text-small {
    font-size: 1em !important;
    font-weight: initial !important;
}

.print-btn {
    margin-left: 950px;
    background-color: white !important;
    position: absolute;
}
</style>
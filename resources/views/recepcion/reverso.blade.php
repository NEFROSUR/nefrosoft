@foreach ($fuas as $fua)
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="USER" />
    <style type="text/css">
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style1 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style1 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style2 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      th.style2 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      td.style3 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      th.style3 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      td.style4 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      th.style4 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      td.style5 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      th.style5 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      td.style6 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #FFFFFF !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      th.style6 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #FFFFFF !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      td.style7 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:5pt; background-color:#C0C0C0 }
      th.style7 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:5pt; background-color:#C0C0C0 }
      td.style8 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      th.style8 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      td.style9 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      th.style9 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      td.style10 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:6pt; background-color:#FFFFFF }
      th.style10 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:6pt; background-color:#FFFFFF }
      td.style11 { vertical-align:middle; text-align:center; border-bottom:1px solid #FFFFFF !important; border-top:1px solid #FFFFFF !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      th.style11 { vertical-align:middle; text-align:center; border-bottom:1px solid #FFFFFF !important; border-top:1px solid #FFFFFF !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      td.style12 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      th.style12 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      td.style13 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      th.style13 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      td.style14 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      th.style14 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      td.style15 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      th.style15 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      td.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:6pt; background-color:#FFFFFF }
      th.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:6pt; background-color:#FFFFFF }
      td.style17 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:6pt; background-color:#FFFFFF }
      th.style17 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:6pt; background-color:#FFFFFF }
      td.style18 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:6pt; background-color:#FFFFFF }
      th.style18 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:6pt; background-color:#FFFFFF }
      td.style19 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      th.style19 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      td.style20 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      th.style20 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      td.style21 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:5pt; background-color:#C0C0C0 }
      th.style21 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:5pt; background-color:#C0C0C0 }
      td.style22 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:5pt; background-color:#C0C0C0 }
      th.style22 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:5pt; background-color:#C0C0C0 }
      td.style23 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:5pt; background-color:#C0C0C0 }
      th.style23 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:5pt; background-color:#C0C0C0 }
      td.style24 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:5pt; background-color:#C0C0C0 }
      th.style24 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:5pt; background-color:#C0C0C0 }
      td.style25 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:5pt; background-color:#C0C0C0 }
      th.style25 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:5pt; background-color:#C0C0C0 }
      td.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      th.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      td.style27 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      th.style27 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      td.style28 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      th.style28 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      td.style29 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      th.style29 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      td.style30 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      th.style30 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      td.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      th.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      td.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      th.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      td.style33 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      th.style33 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      td.style34 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      th.style34 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      td.style35 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      th.style35 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      td.style36 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      th.style36 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      td.style37 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      th.style37 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      td.style38 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:white }
      th.style38 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:white }
      td.style39 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      th.style39 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      td.style40 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:white }
      th.style40 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:white }
      td.style41 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:white }
      th.style41 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:white }
      td.style42 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:white }
      th.style42 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:white }
      td.style43 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:white }
      th.style43 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:white }
      td.style44 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      th.style44 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      td.style45 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      th.style45 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      td.style46 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      th.style46 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      td.style47 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      th.style47 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      td.style48 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      th.style48 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      td.style49 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      th.style49 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      td.style50 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      th.style50 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      td.style51 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      th.style51 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      td.style52 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:5pt; background-color:#C0C0C0 }
      th.style52 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:5pt; background-color:#C0C0C0 }
      td.style53 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      th.style53 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      td.style54 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      th.style54 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:6pt; background-color:#333333 }
      td.style55 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      th.style55 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      td.style56 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      th.style56 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      td.style57 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      th.style57 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:#FFFFFF }
      td.style58 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:7pt; background-color:#FFFFFF }
      th.style58 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:7pt; background-color:#FFFFFF }
      td.style59 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:8pt; background-color:#FFFFFF }
      th.style59 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:8pt; background-color:#FFFFFF }
      td.style60 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:#FFFFFF }
      th.style60 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:#FFFFFF }
      td.style61 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:#FFFFFF }
      th.style61 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:#FFFFFF }
      td.style62 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:#FFFFFF }
      th.style62 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:#FFFFFF }
      td.style63 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style63 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style64 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style64 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style65 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style65 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style66 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      th.style66 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      td.style67 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      th.style67 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:7pt; background-color:#FFFFFF }
      td.style68 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:6pt; background-color:#FFFFFF }
      th.style68 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:6pt; background-color:#FFFFFF }
      table.sheet0 col.col0 { width:56.25555491pt }
      table.sheet0 col.col1 { width:31.17777742pt }
      table.sheet0 col.col2 { width:19.65555533pt }
      table.sheet0 col.col3 { width:26.43333303pt }
      table.sheet0 col.col4 { width:52.18888829pt }
      table.sheet0 col.col5 { width:50.83333275pt }
      table.sheet0 col.col6 { width:50.83333275pt }
      table.sheet0 col.col7 { width:36.59999958pt }
      table.sheet0 col.col8 { width:30.49999965pt }
      table.sheet0 col.col9 { width:18.97777756pt }
      table.sheet0 col.col10 { width:50.83333275pt }
      table.sheet0 col.col11 { width:27.1111108pt }
      table.sheet0 col.col12 { width:27.1111108pt }
      table.sheet0 tr { height:15pt }
      table.sheet0 tr.row0 { height:15pt }
      table.sheet0 tr.row1 { height:15pt }
      table.sheet0 tr.row2 { height:18pt }
      table.sheet0 tr.row3 { height:20.25pt }
      table.sheet0 tr.row4 { height:15pt }
      table.sheet0 tr.row5 { height:15pt }
      table.sheet0 tr.row6 { height:15pt }
      table.sheet0 tr.row7 { height:15pt }
      table.sheet0 tr.row8 { height:15pt }
      table.sheet0 tr.row9 { height:15pt }
      table.sheet0 tr.row10 { height:15pt }
      table.sheet0 tr.row11 { height:15pt }
      table.sheet0 tr.row12 { height:15pt }
      table.sheet0 tr.row13 { height:18pt }
      table.sheet0 tr.row14 { height:15pt }
      table.sheet0 tr.row15 { height:15pt }
      table.sheet0 tr.row16 { height:15pt }
      table.sheet0 tr.row17 { height:15pt }
      table.sheet0 tr.row18 { height:15pt }
      table.sheet0 tr.row19 { height:15pt }
      table.sheet0 tr.row20 { height:15pt }
      table.sheet0 tr.row21 { height:21.75pt }
      table.sheet0 tr.row22 { height:15pt }
      table.sheet0 tr.row23 { height:15pt }
      table.sheet0 tr.row24 { height:15pt }
      table.sheet0 tr.row25 { height:15pt }
      table.sheet0 tr.row26 { height:15pt }
      table.sheet0 tr.row27 { height:15pt }
      table.sheet0 tr.row28 { height:24.75pt }
      table.sheet0 tr.row29 { height:15pt }
      table.sheet0 tr.row30 { height:15pt }
      table.sheet0 tr.row31 { height:15pt }
      table.sheet0 tr.row32 { height:15pt }
      table.sheet0 tr.row34 { height:15pt }
      table.sheet0 tr.row35 { height:15pt }
      table.sheet0 tr.row36 { height:15pt }
      table.sheet0 tr.row47 { height:15pt }
      table.sheet0 tr.row52 { height:15pt }
    </style>
  </head>

  <body>

    <table border="0" cellpadding="4" cellspacing="0" id="sheet0" class="sheet0 gridlines">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <col class="col9">
        <col class="col10">
        <col class="col11">
        <col class="col12">
        <tbody>
          <tr class="row0">
            <td class="column0 style16 s style18" colspan="13">FORMATO DE ATENCIÓN</td>
          </tr>
          <tr class="row1">
            <td class="column0 style54 s style20" colspan="13">MEDICAMENTOS</td>
          </tr>
          <tr class="row2">
            <td class="column0 style52 s">CÓDIGO </td>
            <td class="column1 style24 s style23" colspan="3">DESCRIPCIÓN </td>
            <td class="column4 style7 s">C. PRESCRITA </td>
            <td class="column5 style7 s">C. ENTREGADA </td>
            <td class="column6 style52 s">CÓDIGO </td>
            <td class="column7 style24 s style23" colspan="3">DESCRIPCIÓN </td>
            <td class="column10 style21 s">C. PRESCRITA </td>
            <td class="column11 style22 s style23" colspan="2">C. ENTREGADA </td>
          </tr>
          <tr class="row3">
            <td class="column0 style66 n">19238</td>
            <td class="column1 style28 s style29" colspan="3">Hierro (como saracato) 20 mg Fe/mL INY 5 mL </td>
            <td class="column4 style50 n">0</td>
            <td class="column5 style50 n">0</td>
            <td class="column6 style53 s">03078</td>
            <td class="column7 style28 s style29" colspan="3">Enalapril Maleato 10 mg TAB</td>
            <td class="column10 style30 n">0</td>
            <td class="column11 style31 n style32" colspan="2">0</td>
          </tr>
          <tr class="row4">
            <td class="column0 style53 s">03107</td>
            <td class="column1 style28 s style29" colspan="3">Epoetina alfa (Eritropoyetina) 2000 UI/mL INY 1 Ml</td>
            <td class="column4 style50 n">1</td>
            <td class="column5 style50 n">0</td>
            <td class="column6 style53 s">01522</td>
            <td class="column7 style28 s style29" colspan="3">Captopril 25 mg TAB</td>
            <td class="column10 style30 n">1</td>
            <td class="column11 style31 n style32" colspan="2">1</td>
          </tr>
          <tr class="row5">
            <td class="column0 style67 s">03979<span style="font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:7pt"><sup>14</sup></span></td>
            <td class="column1 style28 s style29" colspan="3">Vitamina B12 Hidroxicobalamina 1mg/mL INY 1mL</td>
            <td class="column4 style50 n">2</td>
            <td class="column5 style50 n">0</td>
            <td class="column6 style53 s">00671</td>
            <td class="column7 style28 s style29" colspan="3">Amlodipino (como Besilato) 10 mg TAB </td>
            <td class="column10 style30 n">2</td>
            <td class="column11 style31 n style32" colspan="2">2</td>
          </tr>
          <tr class="row6">
            <td class="column0 style53 s">02496</td>
            <td class="column1 style28 s style29" colspan="3">Vitamina B - complejo tab. (alternativo) (*)</td>
            <td class="column4 style50 n">3</td>
            <td class="column5 style50 n">0</td>
            <td class="column6 style53 s">05018</td>
            <td class="column7 style28 s style29" colspan="3">Nifedipino 10 MG</td>
            <td class="column10 style30 n">3</td>
            <td class="column11 style31 n style32" colspan="2">3</td>
          </tr>
          <tr class="row7">
            <td class="column0 style53 s">05491</td>
            <td class="column1 style28 s style29" colspan="3">Piridoxina 50mg tab</td>
            <td class="column4 style50 n">4</td>
            <td class="column5 style50 n">0</td>
            <td class="column6 style53 s">05021</td>
            <td class="column7 style28 s style29" colspan="3">Nifedipino de 30 MG</td>
            <td class="column10 style30 n">4</td>
            <td class="column11 style31 n style32" colspan="2">4</td>
          </tr>
          <tr class="row8">
            <td class="column0 style53 s">06127</td>
            <td class="column1 style28 s style29" colspan="3">Tiamina 100 mg tab</td>
            <td class="column4 style50 n">5</td>
            <td class="column5 style50 n">0</td>
            <td class="column6 style53 s">04701</td>
            <td class="column7 style28 s style29" colspan="3">Metildopa 250 MG</td>
            <td class="column10 style30 n">5</td>
            <td class="column11 style31 n style32" colspan="2">5</td>
          </tr>
          <tr class="row9">
            <td class="column0 style53 s">00200</td>
            <td class="column1 style28 s style29" colspan="3">Ácido fólico 0.5 mg tab</td>
            <td class="column4 style50 n">6</td>
            <td class="column5 style50 n">0</td>
            <td class="column6 style53 s">00900</td>
            <td class="column7 style28 s style29" colspan="3">Atenolol 100 MG</td>
            <td class="column10 style30 n">6</td>
            <td class="column11 style31 n style32" colspan="2">6</td>
          </tr>
          <tr class="row10">
            <td class="column0 style53 s">01451</td>
            <td class="column1 style28 s style29" colspan="3">Calcio Carbonato 500 mg (Equiv. a 500 mg de Calcio) tab</td>
            <td class="column4 style50 n">7</td>
            <td class="column5 style50 n">0</td>
            <td class="column6 style53 s">04522</td>
            <td class="column7 style28 s style29" colspan="3">Losartan 50 MG</td>
            <td class="column10 style30 n">7</td>
            <td class="column11 style31 n style32" colspan="2">7</td>
          </tr>
          <tr class="row11">
            <td class="column0 style53 s">01502</td>
            <td class="column1 style28 s style29" colspan="3">Calcitriol 1 mcg/mL INY</td>
            <td class="column4 style50 n">8</td>
            <td class="column5 style50 n">0</td>
            <td class="column6 style53 null"></td>
            <td class="column7 style33 null style26" colspan="3"></td>
            <td class="column10 style59 null"></td>
            <td class="column11 style60 null style61" colspan="2"></td>
          </tr>
          <tr class="row12">
            <td class="column0 style12 s style15" colspan="13">PROCEDIMIENTOS SESIONES DE HEMODIÁLISIS/EXAMENES AUXILIARES/CONSULTAS</td>
          </tr>
          <tr class="row13">
            <td class="column0 style7 s">CÓDIGO </td>
            <td class="column1 style22 s style23" colspan="3">DESCRIPCIÓN </td>
            <td class="column4 style7 s">C. INDICADA </td>
            <td class="column5 style21 s">C. EJECUTADA </td>
            <td class="column6 style25 s">CÓDIGO </td>
            <td class="column7 style22 s style23" colspan="3">DESCRIPCIÓN </td>
            <td class="column10 style21 s">C. INDICADA </td>
            <td class="column11 style22 s style23" colspan="2">C. EJECUTADA </td>
          </tr>
          <tr class="row14">
            <td class="column0 style50 n">84520</td>
            <td class="column1 style34 s style36" colspan="3">Urea<span style="font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:7pt"><sup>2</sup></span></td>
            <td class="column4 style37 n">0</td>
            <td class="column5 style37 n">0</td>
            <td class="column6 style38 n">90937</td>
            <td class="column7 style27 s style29" colspan="3">Hemodiálisis</td>
            <td class="column10 style62 n">1</td>
            <td class="column11 style60 n style61" colspan="2">1</td>
          </tr>
          <tr class="row15">
            <td class="column0 style50 n">82565</td>
            <td class="column1 style27 s style29" colspan="3">Creatinina en sangre</td>
            <td class="column4 style37 n">1</td>
            <td class="column5 style37 n">1</td>
            <td class="column6 style38 n">99203</td>
            <td class="column7 style27 s style29" colspan="3">Consulta Nefrológica</td>
            <td class="column10 style62 n">2</td>
            <td class="column11 style60 n style61" colspan="2">2</td>
          </tr>
          <tr class="row16">
            <td class="column0 style50 n">85014</td>
            <td class="column1 style27 s style29" colspan="3">Hematocrito </td>
            <td class="column4 style37 n">2</td>
            <td class="column5 style37 n">2</td>
            <td class="column6 style38 n">99207</td>
            <td class="column7 style27 s style29" colspan="3">Atención en Salud Mental</td>
            <td class="column10 style62 n">3</td>
            <td class="column11 style60 n style61" colspan="2">3</td>
          </tr>
          <tr class="row17">
            <td class="column0 style50 n">85018</td>
            <td class="column1 style27 s style29" colspan="3">Dosaje de hemoglobina</td>
            <td class="column4 style37 n">3</td>
            <td class="column5 style37 n">3</td>
            <td class="column6 style38 n">99209</td>
            <td class="column7 style27 s style29" colspan="3">Atención en Nutrición</td>
            <td class="column10 style62 n">4</td>
            <td class="column11 style60 n style61" colspan="2">4</td>
          </tr>
          <tr class="row18">
            <td class="column0 style50 n">80051</td>
            <td class="column1 style27 s style29" colspan="3">Electrolitos séricos </td>
            <td class="column4 style37 n">4</td>
            <td class="column5 style37 n">4</td>
            <td class="column6 style38 n">99210</td>
            <td class="column7 style27 s style29" colspan="3">Atención en Servicio Social </td>
            <td class="column10 style62 n">4</td>
            <td class="column11 style60 n style61" colspan="2">4</td>
          </tr>
          <tr class="row19">
            <td class="column0 style50 n">84100</td>
            <td class="column1 style27 s style29" colspan="3">Fosforo en sangre</td>
            <td class="column4 style37 n">5</td>
            <td class="column5 style37 n">5</td>
            <td class="column6 style40 null"></td>
            <td class="column7 style41 null style43" colspan="3"></td>
            <td class="column10 style39 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row20">
            <td class="column0 style50 n">82310</td>
            <td class="column1 style27 s style29" colspan="3">Calcio sérico </td>
            <td class="column4 style37 n">6</td>
            <td class="column5 style37 n">6</td>
            <td class="column6 style40 null"></td>
            <td class="column7 style41 null style43" colspan="3"></td>
            <td class="column10 style39 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row21">
            <td class="column0 style50 n">84165</td>
            <td class="column1 style27 s style29" colspan="3">Proteínas; fraccionamiento y determinacion cuantitativa por electroforesis</td>
            <td class="column4 style37 n">7</td>
            <td class="column5 style37 n">7</td>
            <td class="column6 style40 null"></td>
            <td class="column7 style41 null style43" colspan="3"></td>
            <td class="column10 style39 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row22">
            <td class="column0 style50 n">84075</td>
            <td class="column1 style27 s style29" colspan="3">Fosfatasa alcalina </td>
            <td class="column4 style37 n">8</td>
            <td class="column5 style37 n">8</td>
            <td class="column6 style44 null"></td>
            <td class="column7 style31 null style32" colspan="3"></td>
            <td class="column10 style46 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row23">
            <td class="column0 style50 n">84450</td>
            <td class="column1 style27 s style29" colspan="3">TGO transaminasa glutámico oxalacética</td>
            <td class="column4 style37 n">9</td>
            <td class="column5 style37 n">9</td>
            <td class="column6 style46 null"></td>
            <td class="column7 style31 null style32" colspan="3"></td>
            <td class="column10 style46 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row24">
            <td class="column0 style50 n">84460</td>
            <td class="column1 style27 s style29" colspan="3">TGP transaminasa glutámico pirúvica </td>
            <td class="column4 style37 n">10</td>
            <td class="column5 style37 n">10</td>
            <td class="column6 style46 null"></td>
            <td class="column7 style41 null style43" colspan="3"></td>
            <td class="column10 style46 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row25">
            <td class="column0 style50 n">86703</td>
            <td class="column1 style27 s style29" colspan="3">ELISA o prueba rápida para HIV - 1 Y HIV - 2</td>
            <td class="column4 style37 n">11</td>
            <td class="column5 style37 n">11</td>
            <td class="column6 style46 null"></td>
            <td class="column7 style41 null style43" colspan="3"></td>
            <td class="column10 style46 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row26">
            <td class="column0 style50 n">86592</td>
            <td class="column1 style27 s style29" colspan="3">Prueba de sifílis cualitativa (VDRL, RPR)</td>
            <td class="column4 style37 n">12</td>
            <td class="column5 style37 n">12</td>
            <td class="column6 style46 null"></td>
            <td class="column7 style41 null style43" colspan="3"></td>
            <td class="column10 style46 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row27">
            <td class="column0 style50 n">83970</td>
            <td class="column1 style27 s style29" colspan="3">Paratohormona (PTH)</td>
            <td class="column4 style37 n">13</td>
            <td class="column5 style37 n">13</td>
            <td class="column6 style46 null"></td>
            <td class="column7 style41 null style43" colspan="3"></td>
            <td class="column10 style46 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row28">
            <td class="column0 style50 n">87340</td>
            <td class="column1 style27 s style29" colspan="3">Detección de antígeno de superficie de virus de Hepatitis B (HBsAG) por ELISA </td>
            <td class="column4 style37 n">14</td>
            <td class="column5 style37 n">14</td>
            <td class="column6 style46 null"></td>
            <td class="column7 style41 null style43" colspan="3"></td>
            <td class="column10 style46 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row29">
            <td class="column0 style50 n">86706</td>
            <td class="column1 style27 s style29" colspan="3">Detección de anticuerpos para antígeno de superficie  Hepatitis B (HBs-Ag)</td>
            <td class="column4 style37 n">15</td>
            <td class="column5 style37 n">15</td>
            <td class="column6 style46 null"></td>
            <td class="column7 style31 null style32" colspan="3"></td>
            <td class="column10 style46 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row30">
            <td class="column0 style50 n">86704</td>
            <td class="column1 style27 s style29" colspan="3">Detección de anticuerpos totales para núcleo de virus de Hepatitis B (Total Anti-Hbcore)</td>
            <td class="column4 style37 n">16</td>
            <td class="column5 style37 n">16</td>
            <td class="column6 style46 null"></td>
            <td class="column7 style31 null style32" colspan="3"></td>
            <td class="column10 style46 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row31">
            <td class="column0 style50 n">86803</td>
            <td class="column1 style27 s style29" colspan="3">Determinacion de anticuerpos  para Hepatitis C</td>
            <td class="column4 style37 n">17</td>
            <td class="column5 style37 n">17</td>
            <td class="column6 style46 null"></td>
            <td class="column7 style31 null style32" colspan="3"></td>
            <td class="column10 style46 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row32">
            <td class="column0 style50 n">83540</td>
            <td class="column1 style27 s style29" colspan="3">Hierro sérico</td>
            <td class="column4 style37 n">18</td>
            <td class="column5 style37 n">18</td>
            <td class="column6 style38 null"></td>
            <td class="column7 style27 null style29" colspan="3"></td>
            <td class="column10 style39 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row33">
            <td class="column0 style50 n">82728</td>
            <td class="column1 style27 s style29" colspan="3">Ferritina</td>
            <td class="column4 style37 n">19</td>
            <td class="column5 style37 n">19</td>
            <td class="column6 style38 null"></td>
            <td class="column7 style27 null style29" colspan="3"></td>
            <td class="column10 style39 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row34">
            <td class="column0 style50 n">84466</td>
            <td class="column1 style27 s style29" colspan="3">Saturación de transferrina</td>
            <td class="column4 style37 n">20</td>
            <td class="column5 style37 n">20</td>
            <td class="column6 style38 null"></td>
            <td class="column7 style27 null style29" colspan="3"></td>
            <td class="column10 style39 null"></td>
            <td class="column11 style31 null style32" colspan="2"></td>
          </tr>
          <tr class="row35">
            <td class="column0 style47 s style49" colspan="13">OBSERVACIONES</td>
          </tr>
          <tr class="row36">
            <td class="column0 style63 s style65" colspan="13">.</td>
          </tr>
          <tr class="row37">
            <td class="column0 style63 null style65" colspan="13">.  </td>
          </tr>
          <tr class="row38">
            <td class="column0 style63 null style65" colspan="13">.  </td>
          </tr>
          <tr class="row39">
            <td class="column0 style55 null"></td>
            <td class="column1 style56 null"></td>
            <td class="column2 style56 null"></td>
            <td class="column3 style56 null"></td>
            <td class="column4 style56 null"></td>
            <td class="column5 style56 null"></td>
            <td class="column6 style56 null"></td>
            <td class="column7 style56 null"></td>
            <td class="column8 style56 null"></td>
            <td class="column9 style56 null"></td>
            <td class="column10 style56 null"></td>
            <td class="column11 style56 null"></td>
            <td class="column12 style57 null"></td>
          </tr>
          
          <tr class="row40">
            <td class="column0 style55 null"></td>
            <td class="column1 style56 null"></td>
            <td class="column2 style56 null"></td>
            <td class="column3 style56 null"></td>
            <td class="column4 style56 null"></td>
            <td class="column5 style56 null"></td>
            <td class="column6 style56 null"></td>
            <td class="column7 style56 null"></td>
            <td class="column8 style56 null"></td>
            <td class="column9 style58 s style58" colspan="3" rowspan="13"><span style="color:#000000; font-family:'Arial'; font-size:7pt">Huella Digital del  </span><span style="color:#000000; font-family:'Arial'; font-size:6pt">Asegurado o Apoderado </span></td>
            <td class="column12 style57 null"></td>
          </tr>
          <tr class="row41">
            <td class="column0 style55 null"></td>
            <td class="column1 style56 null"></td>
            <td class="column2 style56 null"></td>
            <td class="column3 style56 null"></td>
            <td class="column4 style56 null"></td>
            <td class="column5 style56 null"></td>
            <td class="column6 style56 null"></td>
            <td class="column7 style56 null"></td>
            <td class="column8 style56 null"></td>
            <td class="column12 style57 null"></td>
          </tr>
          <tr class="row42">
            <td class="column0 style55 null"></td>
            <td class="column1 style56 null"></td>
            <td class="column2 style56 null"></td>
            <td class="column3 style56 null"></td>
            <td class="column4 style56 null"></td>
            <td class="column5 style56 null"></td>
            <td class="column6 style56 null"></td>
            <td class="column7 style56 null"></td>
            <td class="column8 style56 null"></td>
            <td class="column12 style57 null"></td>
          </tr>
          <tr class="row43">
            <td class="column0 style55 null"></td>
            <td class="column1 style56 null"></td>
            <td class="column2 style56 null"></td>
            <td class="column3 style56 null"></td>
            <td class="column4 style56 null"></td>
            <td class="column5 style56 null"></td>
            <td class="column6 style56 null"></td>
            <td class="column7 style56 null"></td>
            <td class="column8 style56 null"></td>
            <td class="column12 style57 null"></td>
          </tr>
          <tr class="row44">
            <td class="column0 style55 null"></td>
            <td class="column1 style56 null"></td>
            <td class="column2 style56 null"></td>
            <td class="column3 style56 null"></td>
            <td class="column4 style56 null"></td>
            <td class="column5 style56 null"></td>
            <td class="column6 style56 null"></td>
            <td class="column7 style56 null"></td>
            <td class="column8 style56 null"></td>
            <td class="column12 style57 null"></td>
          </tr>
          <tr class="row45">
            <td class="column0 style55 null"></td>
            <td class="column1 style56 null"></td>
            <td class="column2 style56 null"></td>
            <td class="column3 style56 null"></td>
            <td class="column4 style56 null"></td>
            <td class="column5 style56 null"></td>
            <td class="column6 style56 null"></td>
            <td class="column7 style56 null"></td>
            <td class="column8 style56 null"></td>
            <td class="column12 style57 null"></td>
          </tr>
          <tr class="row46">
            <td class="column0 style55 null"></td>
            <td class="column1 style56 null"></td>
            <td class="column2 style56 null"></td>
            <td class="column3 style56 null"></td>
            <td class="column4 style56 null"></td>
            <td class="column5 style56 null"></td>
            <td class="column6 style56 null"></td>
            <td class="column7 style56 null"></td>
            <td class="column8 style56 null"></td>
            <td class="column12 style57 null"></td>
          </tr>
          <tr class="row47">
            <td class="column0 style4 null"></td>
            <td class="column1 style5 null"></td>
            <td class="column2 style5 null"></td>
            <td class="column3 style5 null"></td>
            <td class="column4 style5 null"></td>
            <td class="column5 style5 null"></td>
            <td class="column6 style5 null"></td>
            <td class="column7 style5 null"></td>
            <td class="column8 style5 null"></td>
            <td class="column12 style3 null"></td>
          </tr>
          <tr class="row48">
            <td class="column0 style4 null"></td>
            <td class="column1 style5 null"></td>
            <td class="column2 style5 null"></td>
            <td class="column3 style5 null"></td>
            <td class="column4 style5 null"></td>
            <td class="column5 style5 null"></td>
            <td class="column6 style5 null"></td>
            <td class="column7 style5 null"></td>
            <td class="column8 style5 null"></td>
            <td class="column12 style3 null"></td>
          </tr>
          <tr class="row49">
            <td class="column0 style4 null"></td>
            <td class="column1 style5 null"></td>
            <td class="column2 style5 null"></td>
            <td class="column3 style5 null"></td>
            <td class="column4 style5 null"></td>
            <td class="column5 style5 null"></td>
            <td class="column6 style5 null"></td>
            <td class="column7 style5 null"></td>
            <td class="column8 style5 null"></td>
            <td class="column12 style3 null"></td>
          </tr>
          <tr class="row50">
            <td class="column0 style4 null"></td>
            <td class="column1 style5 null"></td>
            <td class="column2 style5 null"></td>
            <td class="column3 style5 null"></td>
            <td class="column4 style5 null"></td>
            <td class="column5 style5 null"></td>
            <td class="column6 style5 null"></td>
            <td class="column7 style5 null"></td>
            <td class="column8 style5 null"></td>
            <td class="column12 style3 null"></td>
          </tr>
          <tr class="row51">
            <td class="column0 style4 null"></td>
            <td class="column1 style5 null"></td>
            <td class="column2 style5 null"></td>
            <td class="column3 style5 null"></td>
            <td class="column4 style5 null"></td>
            <td class="column5 style5 null"></td>
            <td class="column6 style5 null"></td>
            <td class="column7 style5 null"></td>
            <td class="column8 style5 null"></td>
            <td class="column12 style3 null"></td>
          </tr>
          <tr class="row52">
            <td class="column0 style4 null"></td>
            <td class="column1 style68 s style68" colspan="3">Firma  y Sello del Responsable de la Atención</td>
            <td class="column4 style1 null"></td>
            <td class="column5 style10 s style10" colspan="3">Firma  y Sello del Asegurado o Apoderado </td>
            <td class="column8 style5 null"></td>
            <td class="column12 style11 null"></td>
          </tr>
          <tr class="row53">
            <td class="column0 style8 null"></td>
            <td class="column1 style2 null"></td>
            <td class="column2 style9 null style9" colspan="2"></td>
            <td class="column4 style2 null"></td>
            <td class="column5 style9 null style9" colspan="4"></td>
            <td class="column9 style9 null style9" colspan="3"></td>
            <td class="column12 style6 null"></td>
          </tr>
        </tbody>
    </table>
  </body>
</html>
@endforeach
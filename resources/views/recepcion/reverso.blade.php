<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
  <meta name="author" content="USER" />
  <style type="text/css">
    html {
      font-family: Calibri, Arial, Helvetica, sans-serif;
      font-size: 11pt;
      background-color: white
    }

    a.comment-indicator:hover+div.comment {
      background: #ffd;
      position: absolute;
      display: block;
      border: 1px solid black;
      padding: 0.5em
    }

    a.comment-indicator {
      background: red;
      display: inline-block;
      border: 1px solid black;
      width: 0.5em;
      height: 0.5em
    }

    div.comment {
      display: none
    }

    table {
      border-collapse: collapse;
      page-break-after: always
    }

    .gridlines td {
      border: 1px dotted black
    }

    .gridlines th {
      border: 1px dotted black
    }

    .b {
      text-align: center
    }

    .e {
      text-align: center
    }

    .f {
      text-align: right
    }

    .inlineStr {
      text-align: left
    }

    .n {
      text-align: right
    }

    .s {
      text-align: left
    }

    td.style0 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style0 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style1 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style1 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style2 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style2 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style3 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style3 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style4 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style4 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style5 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style5 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style6 {
      vertical-align: top;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 7pt;
      background-color: #FFFFFF
    }

    th.style6 {
      vertical-align: top;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 7pt;
      background-color: #FFFFFF
    }

    td.style7 {
      vertical-align: top;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 7pt;
      background-color: #FFFFFF
    }

    th.style7 {
      vertical-align: top;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 7pt;
      background-color: #FFFFFF
    }

    td.style8 {
      vertical-align: top;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 7pt;
      background-color: #FFFFFF
    }

    th.style8 {
      vertical-align: top;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 7pt;
      background-color: #FFFFFF
    }

    td.style9 {
      vertical-align: top;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 8pt;
      background-color: white
    }

    th.style9 {
      vertical-align: top;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 8pt;
      background-color: white
    }

    td.style10 {
      vertical-align: top;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 8pt;
      background-color: white
    }

    th.style10 {
      vertical-align: top;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 8pt;
      background-color: white
    }

    td.style11 {
      vertical-align: top;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 8pt;
      background-color: white
    }

    th.style11 {
      vertical-align: top;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 8pt;
      background-color: white
    }

    td.style12 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #FFFFFF
    }

    th.style12 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #FFFFFF
    }

    td.style13 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    th.style13 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    td.style14 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    th.style14 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    td.style15 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style15 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style16 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style16 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style17 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style17 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style18 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    th.style18 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    td.style19 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    th.style19 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    td.style20 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    th.style20 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    td.style21 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #FFFFFF
    }

    th.style21 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #FFFFFF
    }

    td.style22 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 6pt;
      background-color: #FFFFFF
    }

    th.style22 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 6pt;
      background-color: #FFFFFF
    }

    td.style23 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 6pt;
      background-color: #FFFFFF
    }

    th.style23 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 6pt;
      background-color: #FFFFFF
    }

    td.style24 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 6pt;
      background-color: #FFFFFF
    }

    th.style24 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 6pt;
      background-color: #FFFFFF
    }

    td.style25 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    th.style25 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    td.style26 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    th.style26 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    td.style27 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style27 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style28 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    th.style28 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    td.style29 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    th.style29 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    td.style30 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style30 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style31 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    th.style31 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    td.style32 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    th.style32 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #FFFFFF;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: #333333
    }

    td.style33 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style33 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style34 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style34 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style35 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style35 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style36 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style36 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style37 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style37 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style38 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style38 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style39 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style39 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style40 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style40 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style41 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style41 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style42 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style42 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style43 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style43 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style44 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style44 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style45 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style45 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style46 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style46 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style47 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style47 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style48 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style48 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style49 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style49 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style50 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style50 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style51 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style51 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style52 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style52 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style53 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: white
    }

    th.style53 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: white
    }

    td.style54 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style54 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style55 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style55 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style56 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: white
    }

    th.style56 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: white
    }

    td.style57 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: white
    }

    th.style57 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: white
    }

    td.style58 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: white
    }

    th.style58 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: white
    }

    td.style59 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: white
    }

    th.style59 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: white
    }

    td.style60 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style60 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style61 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style61 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style62 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style62 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style63 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style63 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style64 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style64 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style65 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style65 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style66 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style66 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style67 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    th.style67 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6.5pt;
      background-color: #FFFFFF
    }

    td.style68 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #FFFFFF
    }

    th.style68 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #FFFFFF
    }

    td.style69 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #FFFFFF
    }

    th.style69 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #FFFFFF
    }

    table.sheet0 col.col0 {
      width: 46.76666613pt
    }

    table.sheet0 col.col1 {
      width: 31.17777742pt
    }

    table.sheet0 col.col2 {
      width: 19.65555533pt
    }

    table.sheet0 col.col3 {
      width: 15.58888871pt
    }

    table.sheet0 col.col4 {
      width: 52.18888829pt
    }

    table.sheet0 col.col5 {
      width: 50.83333275pt
    }

    table.sheet0 col.col6 {
      width: 27.1111108pt
    }

    table.sheet0 col.col7 {
      width: 36.59999958pt
    }

    table.sheet0 col.col8 {
      width: 30.49999965pt
    }

    table.sheet0 col.col9 {
      width: 14.91111094pt
    }

    table.sheet0 col.col10 {
      width: 50.83333275pt
    }

    table.sheet0 col.col11 {
      width: 27.1111108pt
    }

    table.sheet0 col.col12 {
      width: 27.1111108pt
    }

    table.sheet0 tr {
      height: 15pt
    }

    table.sheet0 tr.row0 {
      height: 7.5pt
    }

    table.sheet0 tr.row1 {
      height: 8.25pt
    }

    table.sheet0 tr.row2 {
      height: 8.25pt
    }

    table.sheet0 tr.row3 {
      height: 16.5pt
    }

    table.sheet0 tr.row4 {
      height: 12.75pt
    }

    table.sheet0 tr.row5 {
      height: 11.25pt
    }

    table.sheet0 tr.row6 {
      height: 12pt
    }

    table.sheet0 tr.row7 {
      height: 10.5pt
    }

    table.sheet0 tr.row8 {
      height: 10.5pt
    }

    table.sheet0 tr.row9 {
      height: 13.5pt
    }

    table.sheet0 tr.row10 {
      height: 13.5pt
    }

    table.sheet0 tr.row11 {
      height: 11.25pt
    }

    table.sheet0 tr.row12 {
      height: 10.5pt
    }

    table.sheet0 tr.row13 {
      height: 8.25pt
    }

    table.sheet0 tr.row14 {
      height: 10.5pt
    }

    table.sheet0 tr.row15 {
      height: 10.5pt
    }

    table.sheet0 tr.row16 {
      height: 7.5pt
    }

    table.sheet0 tr.row17 {
      height: 15pt
    }

    table.sheet0 tr.row18 {
      height: 12pt
    }

    table.sheet0 tr.row19 {
      height: 10.5pt
    }

    table.sheet0 tr.row20 {
      height: 9pt
    }

    table.sheet0 tr.row21 {
      height: 21.75pt
    }

    table.sheet0 tr.row22 {
      height: 15pt
    }

    table.sheet0 tr.row23 {
      height: 15pt
    }

    table.sheet0 tr.row24 {
      height: 15pt
    }

    table.sheet0 tr.row25 {
      height: 15pt
    }

    table.sheet0 tr.row26 {
      height: 15pt
    }

    table.sheet0 tr.row27 {
      height: 15pt
    }

    table.sheet0 tr.row28 {
      height: 24.75pt
    }

    table.sheet0 tr.row29 {
      height: 15pt
    }

    table.sheet0 tr.row30 {
      height: 15pt
    }

    table.sheet0 tr.row31 {
      height: 15pt
    }

    table.sheet0 tr.row32 {
      height: 9.75pt
    }

    table.sheet0 tr.row33 {
      height: 9.75pt
    }

    table.sheet0 tr.row34 {
      height: 15pt
    }

    table.sheet0 tr.row35 {
      height: 9pt
    }

    table.sheet0 tr.row36 {
      height: 11.25pt
    }

    table.sheet0 tr.row37 {
      height: 12.75pt
    }

    table.sheet0 tr.row38 {
      height: 13.5pt
    }

    table.sheet0 tr.row52 {
      height: 15pt
    }

    table.sheet0 tr.row57 {
      height: 15pt
    }
  </style>
</head>

<body>
  @foreach ($fuas as $fua)
  <table border="0" cellpadding="4.1" cellspacing="0" id="sheet0" class="sheet0 gridlines">
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
        <td class="column0 style22 s style24" colspan="13">FORMATO DE ATENCIÓN</td>
      </tr>
      <tr class="row1">
        <td class="column0 style25 s style26" colspan="13">MEDICAMENTOS</td>
      </tr>
      <tr class="row2">
        <td class="column0 style5 s">CÓDIGO </td>
        <td class="column1 style15 s style16" colspan="3">DESCRIPCIÓN </td>
        <td class="column4 style3 s">C. PRESCRITA </td>
        <td class="column5 style3 s">C. ENTREGADA </td>
        <td class="column6 style5 s">CÓDIGO </td>
        <td class="column7 style15 s style16" colspan="3">DESCRIPCIÓN </td>
        <td class="column10 style2 s">C. PRESCRITA </td>
        <td class="column11 style17 s style27" colspan="2">C. ENTREGADA </td>
      </tr>
      <tr class="row3">
        <td class="column0 style41 n">19238</td>
        <td class="column1 style42 s style43" colspan="3">Hierro (como saracato) 20 mg Fe/mL INY 5 mL </td>
        <td class="column4 style44 n"></td>
        <!--PROGRAMACION GENERAL DE MEDICAMENTOS-->
        <td class="column5 style44 n"></td>
        <!--PROGRAMACION GENERAL DE MEDICAMENTOS-->
        <td class="column6 style45 s">03078</td>
        <td class="column7 style42 s style43" colspan="3">Enalapril Maleato 10 mg TAB</td>
        <td class="column10 style46 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column11 style47 n style48" colspan="2"></td>
        <!--CONSULTA NEFROLOGICA-->
      </tr>
      <tr class="row4">
        <td class="column0 style45 s">03107</td>
        <td class="column1 style42 s style43" colspan="3">Epoetina alfa (Eritropoyetina) 2000 UI/mL INY 1 Ml</td>
        <td class="column4 style44 n"></td>
        <!--PROGRAMACION GENERAL DE MEDICAMENTOS-->
        <td class="column5 style44 n"></td>
        <!--PROGRAMACION GENERAL DE MEDICAMENTOS-->
        <td class="column6 style45 s">01522</td>
        <td class="column7 style42 s style43" colspan="3">Captopril 25 mg TAB</td>
        <td class="column10 style46 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column11 style47 n style48" colspan="2"></td>
        <!--CONSULTA NEFROLOGICA-->
      </tr>
      <tr class="row5">
        <td class="column0 style67 s">03979 <span style="font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:6.5pt"><sup>14</sup></span></td>
        <td class="column1 style42 s style43" colspan="3">Vitamina B12 Hidroxicobalamina 1mg/mL INY 1mL</td>
        <td class="column4 style44 n"></td>
        <!--PROGRAMACION GENERAL DE MEDICAMENTOS-->
        <td class="column5 style44 n"></td>
        <!--PROGRAMACION GENERAL DE MEDICAMENTOS-->
        <td class="column6 style45 s">00671</td>
        <td class="column7 style42 s style43" colspan="3">Amlodipino (como Besilato) 10 mg TAB </td>
        <td class="column10 style46 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column11 style47 n style48" colspan="2"></td>
        <!--CONSULTA NEFROLOGICA-->
      </tr>
      <tr class="row6">
        <td class="column0 style45 s">02496</td>
        <td class="column1 style42 s style43" colspan="3">Vitamina B - complejo tab. (alternativo) (*)</td>
        <td class="column4 style44 n">——</td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column5 style44 n">——</td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column6 style45 s">05018</td>
        <td class="column7 style42 s style43" colspan="3">Nifedipino 10 MG</td>
        <td class="column10 style46 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column11 style47 n style48" colspan="2"></td>
        <!--CONSULTA NEFROLOGICA-->
      </tr>
      <tr class="row7">
        <td class="column0 style45 s">05491</td>
        <td class="column1 style42 s style43" colspan="3">Piridoxina 50mg tab</td>
        <td class="column4 style44 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column5 style44 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column6 style45 s">05021</td>
        <td class="column7 style42 s style43" colspan="3">Nifedipino de 30 MG</td>
        <td class="column10 style46 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column11 style47 n style48" colspan="2"></td>
        <!--CONSULTA NEFROLOGICA-->
      </tr>
      <tr class="row8">
        <td class="column0 style45 s">06127</td>
        <td class="column1 style42 s style43" colspan="3">Tiamina 100 mg tab</td>
        <td class="column4 style44 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column5 style44 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column6 style45 s">04701</td>
        <td class="column7 style42 s style43" colspan="3">Metildopa 250 MG</td>
        <td class="column10 style46 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column11 style47 n style48" colspan="2"></td>
        <!--CONSULTA NEFROLOGICA-->
      </tr>
      <tr class="row9">
        <td class="column0 style45 s">00200</td>
        <td class="column1 style42 s style43" colspan="3">Ácido fólico 0.5 mg tab</td>
        <td class="column4 style44 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column5 style44 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column6 style45 s">00900</td>
        <td class="column7 style42 s style43" colspan="3">Atenolol 100 MG</td>
        <td class="column10 style46 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column11 style47 n style48" colspan="2"></td>
        <!--CONSULTA NEFROLOGICA-->
      </tr>
      <tr class="row10">
        <td class="column0 style45 s">01451</td>
        <td class="column1 style42 s style43" colspan="3">Calcio Carbonato 500 mg (Equiv. a 500 mg de Calcio) tab</td>
        <td class="column4 style44 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column5 style44 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column6 style45 s">04522</td>
        <td class="column7 style42 s style43" colspan="3">Losartan 50 MG</td>
        <td class="column10 style46 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column11 style47 n style48" colspan="2"></td>
        <!--CONSULTA NEFROLOGICA-->
      </tr>
      <tr class="row11">
        <td class="column0 style45 s">01502</td>
        <td class="column1 style42 s style43" colspan="3">Calcitriol 1 mcg/mL INY</td>
        <td class="column4 style44 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column5 style44 n"></td>
        <!--CONSULTA NEFROLOGICA-->
        <td class="column6 style45 null"></td>
        <td class="column7 style49 null style50" colspan="3"></td>
        <td class="column10 style46 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row12">
        <td class="column0 style28 s style29" colspan="13">PROCEDIMIENTOS SESIONES DE HEMODIÁLISIS/EXAMENES AUXILIARES/CONSULTAS</td>
      </tr>
      <tr class="row13">
        <td class="column0 style30 s">CÓDIGO </td>
        <td class="column1 style17 s style16" colspan="3">DESCRIPCIÓN </td>
        <td class="column4 style3 s">C. INDICADA </td>
        <td class="column5 style2 s">C. EJECUTADA </td>
        <td class="column6 style4 s">CÓDIGO </td>
        <td class="column7 style17 s style16" colspan="3">DESCRIPCIÓN </td>
        <td class="column10 style2 s">C. INDICADA </td>
        <td class="column11 style17 s style27" colspan="2">C. EJECUTADA </td>
      </tr>
      <tr class="row14">
        <td class="column0 style51 n">84520</td>
        <td class="column1 style64 s">Urea<span style="font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:6.5pt"><sup>2</sup></span></td>
        <td class="column2 style65 null"></td>
        <td class="column3 style66 null"></td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style53 n">90937</td>
        <td class="column7 style54 s style43" colspan="3">Hemodiálisis</td>
        <td class="column10 style55 n">
          @if ($fua->tipoDeConsulta === 'Atencion de Procedimientos Ambulatorios')
          1
          @endif
        </td>
        <!--SESION-->
        <td class="column11 style47 n style48" colspan="2">
          @if ($fua->tipoDeConsulta === 'Atencion de Procedimientos Ambulatorios')
          1
          @endif
        </td>
        <!--SESION-->
      </tr>
      <tr class="row15">
        <td class="column0 style51 n">82565</td>
        <td class="column1 style54 s style43" colspan="3">Creatinina en sangre</td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style53 n">99203</td>
        <td class="column7 style54 s style43" colspan="3">Consulta Nefrológica</td>
        <td class="column10 style55 n">
          @if ($fua->tipoDeConsulta === 'Consulta Externa')
          @if ($fua->profesional->especialidad === 'Nefrologia               ')
          1
          @endif
          @endif
        </td>
        <!--SESION-->
        <td class="column11 style47 n style48" colspan="2">
        @if ($fua->tipoDeConsulta === 'Consulta Externa')
          @if ($fua->profesional->especialidad === 'Nefrologia               ')
          1
          @endif
          @endif
        </td>
        <!--SESION-->
      </tr>
      <tr class="row16">
        <td class="column0 style51 n">85014</td>
        <td class="column1 style54 s style43" colspan="3">Hematocrito </td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style53 n">99207</td>
        <td class="column7 style54 s style43" colspan="3">Atención en Salud Mental</td>
        <td class="column10 style55 n">
          @if ($fua->profesional->especialidad === 'Psicologia               ')
          1
          @endif
        </td>
        <!--SESION-->
        <td class="column11 style47 n style48" colspan="2">
        @if ($fua->profesional->especialidad === 'Psicologia               ')
          1
          @endif
        </td>
        <!--SESION-->
      </tr>
      <tr class="row17">
        <td class="column0 style51 n">85018</td>
        <td class="column1 style54 s style43" colspan="3">Dosaje de hemoglobina</td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style53 n">99209</td>
        <td class="column7 style54 s style43" colspan="3">Atención en Nutrición</td>
        <td class="column10 style55 n">
        @if ($fua->profesional->especialidad === 'Nutricion                ')
          1
          @endif
        </td>
        <!--SESION-->
        <td class="column11 style47 n style48" colspan="2">
        @if ($fua->profesional->especialidad === 'Nutricion                ')
          1
          @endif
        </td>
        <!--SESION-->
      </tr>
      <tr class="row18">
        <td class="column0 style51 n">80051</td>
        <td class="column1 style54 s style43" colspan="3">Electrolitos séricos </td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style53 n">99210</td>
        <td class="column7 style54 s style43" colspan="3">Atención en Servicio Social </td>
        <td class="column10 style55 n">
        @if ($fua->profesional->especialidad === 'Trabajo Social           ')
          1
          @endif
        </td>
        <!--SESION-->
        <td class="column11 style47 n style48" colspan="2">
        @if ($fua->profesional->especialidad === 'Trabajo Social           ')
          1
          @endif
        </td>
        <!--SESION-->
      </tr>
      <tr class="row19">
        <td class="column0 style51 n">84100</td>
        <td class="column1 style54 s style43" colspan="3">Fosforo en sangre</td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style56 null"></td>
        <td class="column7 style57 null style59" colspan="3"></td>
        <td class="column10 style55 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row20">
        <td class="column0 style51 n">82310</td>
        <td class="column1 style54 s style43" colspan="3">Calcio sérico </td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style56 null"></td>
        <td class="column7 style57 null style59" colspan="3"></td>
        <td class="column10 style55 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row21">
        <td class="column0 style51 n">84165</td>
        <td class="column1 style54 s style43" colspan="3">Proteínas; fraccionamiento y determinacion cuantitativa por electroforesis</td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style56 null"></td>
        <td class="column7 style57 null style59" colspan="3"></td>
        <td class="column10 style55 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row22">
        <td class="column0 style51 n">84075</td>
        <td class="column1 style54 s style43" colspan="3">Fosfatasa alcalina </td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style60 null"></td>
        <td class="column7 style47 null style62" colspan="3"></td>
        <td class="column10 style63 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row23">
        <td class="column0 style51 n">84450</td>
        <td class="column1 style54 s style43" colspan="3">TGO transaminasa glutámico oxalacética</td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style63 null"></td>
        <td class="column7 style47 null style62" colspan="3"></td>
        <td class="column10 style63 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row24">
        <td class="column0 style51 n">84460</td>
        <td class="column1 style54 s style43" colspan="3">TGP transaminasa glutámico pirúvica </td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style63 null"></td>
        <td class="column7 style57 null style59" colspan="3"></td>
        <td class="column10 style63 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row25">
        <td class="column0 style51 n">86703</td>
        <td class="column1 style54 s style43" colspan="3">ELISA o prueba rápida para HIV - 1 Y HIV - 2</td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style63 null"></td>
        <td class="column7 style57 null style59" colspan="3"></td>
        <td class="column10 style63 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row26">
        <td class="column0 style51 n">86592</td>
        <td class="column1 style54 s style43" colspan="3">Prueba de sifílis cualitativa (VDRL, RPR)</td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style63 null"></td>
        <td class="column7 style57 null style59" colspan="3"></td>
        <td class="column10 style63 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row27">
        <td class="column0 style51 n">83970</td>
        <td class="column1 style54 s style43" colspan="3">Paratohormona (PTH)</td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style63 null"></td>
        <td class="column7 style57 null style59" colspan="3"></td>
        <td class="column10 style63 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row28">
        <td class="column0 style51 n">87340</td>
        <td class="column1 style54 s style43" colspan="3">Detección de antígeno de superficie de virus de Hepatitis B (HBsAG) por ELISA </td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style63 null"></td>
        <td class="column7 style57 null style59" colspan="3"></td>
        <td class="column10 style63 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row29">
        <td class="column0 style51 n">86706</td>
        <td class="column1 style54 s style43" colspan="3">Detección de anticuerpos para antígeno de superficie Hepatitis B (HBs-Ag)</td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style63 null"></td>
        <td class="column7 style47 null style62" colspan="3"></td>
        <td class="column10 style63 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row30">
        <td class="column0 style51 n">86704</td>
        <td class="column1 style54 s style43" colspan="3">Detección de anticuerpos totales para núcleo de virus de Hepatitis B (Total Anti-Hbcore)</td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style63 null"></td>
        <td class="column7 style47 null style62" colspan="3"></td>
        <td class="column10 style63 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row31">
        <td class="column0 style51 n">86803</td>
        <td class="column1 style54 s style43" colspan="3">Determinacion de anticuerpos para Hepatitis C</td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style63 null"></td>
        <td class="column7 style47 null style62" colspan="3"></td>
        <td class="column10 style63 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row32">
        <td class="column0 style51 n">83540</td>
        <td class="column1 style54 s style43" colspan="3">Hierro sérico</td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style53 null"></td>
        <td class="column7 style54 null style43" colspan="3"></td>
        <td class="column10 style55 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row33">
        <td class="column0 style51 n">82728</td>
        <td class="column1 style54 s style43" colspan="3">Ferritina</td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style53 null"></td>
        <td class="column7 style54 null style43" colspan="3"></td>
        <td class="column10 style55 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row34">
        <td class="column0 style51 n">84466</td>
        <td class="column1 style54 s style43" colspan="3">Saturación de transferrina</td>
        <td class="column4 style52 n"></td>
        <!--KTV-->
        <td class="column5 style52 n"></td>
        <!--KTV-->
        <td class="column6 style53 null"></td>
        <td class="column7 style54 null style43" colspan="3"></td>
        <td class="column10 style55 null"></td>
        <td class="column11 style47 null style48" colspan="2"></td>
      </tr>
      <tr class="row35">
        <td class="column0 style31 s style32" colspan="13">OBSERVACIONES</td>
      </tr>
      <tr class="row36">
        <td class="column0 style9 s style11" colspan="13">.</td>
      </tr>
      <tr class="row37">
        <td class="column0 style9 s style11" colspan="13">.</td>
      </tr>
      <tr class="row38">
        <td class="column0 style9 s style11" colspan="13">.</td>
      </tr>
      <tr class="row39">
        <td class="column0 style6 null"></td>
        <td class="column1 style7 null"></td>
        <td class="column2 style7 null"></td>
        <td class="column3 style7 null"></td>
        <td class="column4 style7 null"></td>
        <td class="column5 style7 null"></td>
        <td class="column6 style7 null"></td>
        <td class="column7 style7 null"></td>
        <td class="column8 style7 null"></td>
        <td class="column9 style7 null"></td>
        <td class="column10 style7 null"></td>
        <td class="column11 style7 null"></td>
        <td class="column12 style8 null"></td>
      </tr>
      <tr class="row40">
        <td class="column0 style6 null"></td>
        <td class="column1 style7 null"></td>
        <td class="column2 style7 null"></td>
        <td class="column3 style7 null"></td>
        <td class="column4 style7 null"></td>
        <td class="column5 style7 null"></td>
        <td class="column6 style7 null"></td>
        <td class="column7 style7 null"></td>
        <td class="column8 style7 null"></td>
        <td class="column9 style69 s style68" colspan="3" rowspan="18">Huella Digital del Asegurado o Apoderado </td>
        <td class="column12 style8 null"></td>
      </tr>
      <tr class="row41">
        <td class="column0 style6 null"></td>
        <td class="column1 style7 null"></td>
        <td class="column2 style7 null"></td>
        <td class="column3 style7 null"></td>
        <td class="column4 style7 null"></td>
        <td class="column5 style7 null"></td>
        <td class="column6 style7 null"></td>
        <td class="column7 style7 null"></td>
        <td class="column8 style7 null"></td>
        <td class="column12 style8 null"></td>
      </tr>
      <tr class="row42">
        <td class="column0 style6 null"></td>
        <td class="column1 style7 null"></td>
        <td class="column2 style7 null"></td>
        <td class="column3 style7 null"></td>
        <td class="column4 style7 null"></td>
        <td class="column5 style7 null"></td>
        <td class="column6 style7 null"></td>
        <td class="column7 style7 null"></td>
        <td class="column8 style7 null"></td>
        <td class="column12 style8 null"></td>
      </tr>
      <tr class="row43">
        <td class="column0 style6 null"></td>
        <td class="column1 style7 null"></td>
        <td class="column2 style7 null"></td>
        <td class="column3 style7 null"></td>
        <td class="column4 style7 null"></td>
        <td class="column5 style7 null"></td>
        <td class="column6 style7 null"></td>
        <td class="column7 style7 null"></td>
        <td class="column8 style7 null"></td>
        <td class="column12 style8 null"></td>
      </tr>
      <tr class="row44">
        <td class="column0 style6 null"></td>
        <td class="column1 style7 null"></td>
        <td class="column2 style7 null"></td>
        <td class="column3 style7 null"></td>
        <td class="column4 style7 null"></td>
        <td class="column5 style7 null"></td>
        <td class="column6 style7 null"></td>
        <td class="column7 style7 null"></td>
        <td class="column8 style7 null"></td>
        <td class="column12 style8 null"></td>
      </tr>
      <tr class="row45">
        <td class="column0 style6 null"></td>
        <td class="column1 style7 null"></td>
        <td class="column2 style7 null"></td>
        <td class="column3 style7 null"></td>
        <td class="column4 style7 null"></td>
        <td class="column5 style7 null"></td>
        <td class="column6 style7 null"></td>
        <td class="column7 style7 null"></td>
        <td class="column8 style7 null"></td>
        <td class="column12 style8 null"></td>
      </tr>
      <tr class="row46">
        <td class="column0 style6 null"></td>
        <td class="column1 style7 null"></td>
        <td class="column2 style7 null"></td>
        <td class="column3 style7 null"></td>
        <td class="column4 style7 null"></td>
        <td class="column5 style7 null"></td>
        <td class="column6 style7 null"></td>
        <td class="column7 style7 null"></td>
        <td class="column8 style7 null"></td>
        <td class="column12 style8 null"></td>
      </tr>
      <tr class="row47">
        <td class="column0 style6 null"></td>
        <td class="column1 style7 null"></td>
        <td class="column2 style7 null"></td>
        <td class="column3 style7 null"></td>
        <td class="column4 style7 null"></td>
        <td class="column5 style7 null"></td>
        <td class="column6 style7 null"></td>
        <td class="column7 style7 null"></td>
        <td class="column8 style7 null"></td>
        <td class="column12 style8 null"></td>
      </tr>
      <tr class="row48">
        <td class="column0 style6 null"></td>
        <td class="column1 style7 null"></td>
        <td class="column2 style7 null"></td>
        <td class="column3 style7 null"></td>
        <td class="column4 style7 null"></td>
        <td class="column5 style7 null"></td>
        <td class="column6 style7 null"></td>
        <td class="column7 style7 null"></td>
        <td class="column8 style7 null"></td>
        <td class="column12 style8 null"></td>
      </tr>
      <tr class="row49">
        <td class="column0 style6 null"></td>
        <td class="column1 style7 null"></td>
        <td class="column2 style7 null"></td>
        <td class="column3 style7 null"></td>
        <td class="column4 style7 null"></td>
        <td class="column5 style7 null"></td>
        <td class="column6 style7 null"></td>
        <td class="column7 style7 null"></td>
        <td class="column8 style7 null"></td>
        <td class="column12 style8 null"></td>
      </tr>
      <tr class="row50">
        <td class="column0 style6 null"></td>
        <td class="column1 style7 null"></td>
        <td class="column2 style7 null"></td>
        <td class="column3 style7 null"></td>
        <td class="column4 style7 null"></td>
        <td class="column5 style7 null"></td>
        <td class="column6 style7 null"></td>
        <td class="column7 style7 null"></td>
        <td class="column8 style7 null"></td>
        <td class="column12 style8 null"></td>
      </tr>
      <tr class="row51">
        <td class="column0 style6 null"></td>
        <td class="column1 style7 null"></td>
        <td class="column2 style7 null"></td>
        <td class="column3 style7 null"></td>
        <td class="column4 style7 null"></td>
        <td class="column5 style7 null"></td>
        <td class="column6 style7 null"></td>
        <td class="column7 style7 null"></td>
        <td class="column8 style7 null"></td>
        <td class="column12 style8 null"></td>
      </tr>
      <tr class="row52">
        <td class="column0 style33 null"></td>
        <td class="column1 style1 null"></td>
        <td class="column2 style1 null"></td>
        <td class="column3 style1 null"></td>
        <td class="column4 style1 null"></td>
        <td class="column5 style1 null"></td>
        <td class="column6 style1 null"></td>
        <td class="column7 style1 null"></td>
        <td class="column8 style1 null"></td>
        <td class="column12 style34 null"></td>
      </tr>
      <tr class="row53">
        <td class="column0 style33 null"></td>
        <td class="column1 style1 null"></td>
        <td class="column2 style1 null"></td>
        <td class="column3 style1 null"></td>
        <td class="column4 style1 null"></td>
        <td class="column5 style1 null"></td>
        <td class="column6 style1 null"></td>
        <td class="column7 style1 null"></td>
        <td class="column8 style1 null"></td>
        <td class="column12 style34 null"></td>
      </tr>
      <tr class="row54">
        <td class="column0 style33 null"></td>
        <td class="column1 style1 null"></td>
        <td class="column2 style1 null"></td>
        <td class="column3 style1 null"></td>
        <td class="column4 style1 null"></td>
        <td class="column5 style1 null"></td>
        <td class="column6 style1 null"></td>
        <td class="column7 style1 null"></td>
        <td class="column8 style1 null"></td>
        <td class="column12 style34 null"></td>
      </tr>
      <tr class="row55">
        <td class="column0 style33 null"></td>
        <td class="column1 style1 null"></td>
        <td class="column2 style1 null"></td>
        <td class="column3 style1 null"></td>
        <td class="column4 style1 null"></td>
        <td class="column5 style1 null"></td>
        <td class="column6 style1 null"></td>
        <td class="column7 style1 null"></td>
        <td class="column8 style1 null"></td>
        <td class="column12 style34 null"></td>
      </tr>
      <tr class="row56">
        <td class="column0 style33 null"></td>
        <td class="column1 style1 null"></td>
        <td class="column2 style1 null"></td>
        <td class="column3 style1 null"></td>
        <td class="column4 style1 null"></td>
        <td class="column5 style1 null"></td>
        <td class="column6 style1 null"></td>
        <td class="column7 style1 null"></td>
        <td class="column8 style1 null"></td>
        <td class="column12 style34 null"></td>
      </tr>
      <tr class="row57">
        <td class="column0 style33 null"></td>
        <td class="column1 style12 s style12" colspan="3">Firma y Sello del Responsable de la Atención</td>
        <td class="column4 style35 null"></td>
        <td class="column5 style21 s style21" colspan="3">Firma y Sello del Asegurado o Apoderado </td>
        <td class="column8 style1 null"></td>
        <td class="column12 style36 null"></td>
      </tr>
      <tr class="row58">
        <td class="column0 style37 null"></td>
        <td class="column1 style38 null"></td>
        <td class="column2 style39 null style39" colspan="2"></td>
        <td class="column4 style38 null"></td>
        <td class="column5 style39 null style39" colspan="4"></td>
        <td class="column9 style39 null style39" colspan="3"></td>
        <td class="column12 style40 null"></td>
      </tr>
    </tbody>
  </table>
  @endforeach
</body>

</html>
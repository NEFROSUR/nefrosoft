<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
  <meta name="author" content="Administracion" />
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
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 10pt;
      background-color: #FFFFFF
    }

    th.style1 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 10pt;
      background-color: #FFFFFF
    }

    td.style2 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style2 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style3 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style3 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style4 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style4 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style5 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #969696 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #969696
    }

    th.style5 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #969696 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #969696
    }

    td.style6 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5.5pt;
      background-color: white
    }

    th.style6 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5.5pt;
      background-color: white
    }

    td.style7 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style7 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style8 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style8 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style9 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style9 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style10 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style10 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style11 {
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
      background-color: white
    }

    th.style11 {
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
      background-color: white
    }

    td.style12 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style12 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style13 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style13 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style14 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style14 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style15 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style15 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style16 {
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
      background-color: white
    }

    th.style16 {
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
      background-color: white
    }

    td.style17 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 7pt;
      background-color: #FFFFFF
    }

    th.style17 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 7pt;
      background-color: #FFFFFF
    }

    td.style18 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 7pt;
      background-color: #FFFFFF
    }

    th.style18 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 7pt;
      background-color: #FFFFFF
    }

    td.style19 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style19 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style20 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style20 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style21 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style21 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style22 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style22 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style23 {
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

    th.style23 {
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

    td.style24 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style24 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style25 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style25 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style26 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style26 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style27 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style27 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style28 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style28 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style29 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style29 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style30 {
      vertical-align: bottom;
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

    th.style30 {
      vertical-align: bottom;
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

    td.style31 {
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

    th.style31 {
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

    td.style32 {
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

    th.style32 {
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

    td.style33 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style33 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style34 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style34 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style35 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style35 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style36 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: white
    }

    th.style36 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: white
    }

    td.style37 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: white
    }

    th.style37 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: white
    }

    td.style38 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: white
    }

    th.style38 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: white
    }

    td.style39 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style39 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style40 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style40 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style41 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style41 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style42 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style42 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style43 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style43 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style44 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style44 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style45 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #969696
    }

    th.style45 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #969696
    }

    td.style46 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #969696
    }

    th.style46 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #969696
    }

    td.style47 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style47 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style48 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style48 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style49 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style49 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style50 {
      vertical-align: middle;
      text-align: right;
      padding-right: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 5pt;
      background-color: #FFFFFF
    }

    th.style50 {
      vertical-align: middle;
      text-align: right;
      padding-right: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 5pt;
      background-color: #FFFFFF
    }

    td.style51 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style51 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style52 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style52 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style53 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 7pt;
      background-color: #C0C0C0
    }

    th.style53 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 7pt;
      background-color: #C0C0C0
    }

    td.style54 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 7pt;
      background-color: #C0C0C0
    }

    th.style54 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 7pt;
      background-color: #C0C0C0
    }

    td.style55 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #969696
    }

    th.style55 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #969696
    }

    td.style56 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #969696 !important;
      border-left: 1px solid #969696 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #969696
    }

    th.style56 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #969696 !important;
      border-left: 1px solid #969696 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #969696
    }

    td.style57 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #969696 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #969696
    }

    th.style57 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #969696 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #969696
    }

    td.style58 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #969696 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #969696
    }

    th.style58 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #969696 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #969696
    }

    td.style59 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style59 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style60 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style60 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style61 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style61 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style62 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style62 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style63 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #969696 !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 9pt;
      background-color: #FFFFFF
    }

    th.style63 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #969696 !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 9pt;
      background-color: #FFFFFF
    }

    td.style64 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #969696 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style64 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #969696 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style65 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style65 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style66 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style66 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style67 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #C0C0C0
    }

    th.style67 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #C0C0C0
    }

    td.style68 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #C0C0C0
    }

    th.style68 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #C0C0C0
    }

    td.style69 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #C0C0C0
    }

    th.style69 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #C0C0C0
    }

    td.style70 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #969696
    }

    th.style70 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #969696
    }

    td.style71 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #969696
    }

    th.style71 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #969696
    }

    td.style72 {
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
      background-color: #969696
    }

    th.style72 {
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
      background-color: #969696
    }

    td.style73 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
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

    th.style73 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
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

    td.style74 {
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
      background-color: #969696
    }

    th.style74 {
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
      background-color: #969696
    }

    td.style75 {
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
      background-color: #969696
    }

    th.style75 {
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
      background-color: #969696
    }

    td.style76 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #C0C0C0
    }

    th.style76 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #C0C0C0
    }

    td.style77 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style77 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style78 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style78 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style79 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style79 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style80 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style80 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style81 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style81 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style82 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style82 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style83 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: white
    }

    th.style83 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: white
    }

    td.style84 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style84 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style85 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style85 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style86 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style86 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style87 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style87 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style88 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style88 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style89 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style89 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style90 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style90 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style91 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style91 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style92 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style92 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style93 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #969696
    }

    th.style93 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #969696
    }

    td.style94 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #969696
    }

    th.style94 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #969696
    }

    td.style95 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style95 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style96 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 3pt;
      background-color: #C0C0C0
    }

    th.style96 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 3pt;
      background-color: #C0C0C0
    }

    td.style97 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 4pt;
      background-color: #C0C0C0
    }

    th.style97 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 4pt;
      background-color: #C0C0C0
    }

    td.style98 {
      vertical-align: middle;
      text-align: right;
      padding-right: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 5pt;
      background-color: #FFFFFF
    }

    th.style98 {
      vertical-align: middle;
      text-align: right;
      padding-right: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 5pt;
      background-color: #FFFFFF
    }

    td.style99 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style99 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style100 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #C0C0C0
    }

    th.style100 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #C0C0C0
    }

    td.style101 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style101 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style102 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style102 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style103 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style103 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style104 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style104 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style105 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Cambria';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style105 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Cambria';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style106 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style106 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style107 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style107 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #FFFFFF !important;
      border-top: 1px solid #FFFFFF !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style108 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style108 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #FFFFFF !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style109 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style109 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style110 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style110 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style111 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style111 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #FFFFFF !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style112 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style112 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style113 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #969696 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #969696
    }

    th.style113 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #969696 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #969696
    }

    td.style114 {
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
      background-color: #969696
    }

    th.style114 {
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
      background-color: #969696
    }

    td.style115 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: white
    }

    th.style115 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: white
    }

    td.style116 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: white
    }

    th.style116 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: white
    }

    td.style117 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 7pt;
      background-color: #C0C0C0
    }

    th.style117 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 7pt;
      background-color: #C0C0C0
    }

    td.style118 {
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
      background-color: white
    }

    th.style118 {
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
      background-color: white
    }

    td.style119 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    th.style119 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    td.style120 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    th.style120 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    td.style121 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    th.style121 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    td.style122 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    th.style122 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    td.style123 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    th.style123 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    td.style124 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    th.style124 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    td.style125 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Cambria';
      font-size: 8pt;
      background-color: white
    }

    th.style125 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Cambria';
      font-size: 8pt;
      background-color: white
    }

    td.style126 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Cambria';
      font-size: 8pt;
      background-color: white
    }

    th.style126 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Cambria';
      font-size: 8pt;
      background-color: white
    }

    td.style127 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Cambria';
      font-size: 8pt;
      background-color: white
    }

    th.style127 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Cambria';
      font-size: 8pt;
      background-color: white
    }

    td.style128 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style128 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style129 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style129 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style130 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    th.style130 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 5pt;
      background-color: #C0C0C0
    }

    td.style131 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    th.style131 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    td.style132 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    th.style132 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    td.style133 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    th.style133 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    td.style134 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 2px solid #000000 !important;
      border-top: 2px solid #000000 !important;
      border-left: 2px solid #000000 !important;
      border-right: 2px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    th.style134 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 2px solid #000000 !important;
      border-top: 2px solid #000000 !important;
      border-left: 2px solid #000000 !important;
      border-right: 2px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    td.style135 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 9pt;
      background-color: white
    }

    th.style135 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 9pt;
      background-color: white
    }

    td.style136 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    th.style136 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    td.style137 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    th.style137 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    td.style138 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    th.style138 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    td.style139 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: #FFFFFF
    }

    th.style139 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: #FFFFFF
    }

    td.style140 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: #FFFFFF
    }

    th.style140 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: #FFFFFF
    }

    td.style141 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    th.style141 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    td.style142 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    th.style142 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    td.style143 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #D8D8D8
    }

    th.style143 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #D8D8D8
    }

    td.style144 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #D8D8D8
    }

    th.style144 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #D8D8D8
    }

    td.style145 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #D8D8D8
    }

    th.style145 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #D8D8D8
    }

    td.style146 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #D8D8D8
    }

    th.style146 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #D8D8D8
    }

    td.style147 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #D8D8D8
    }

    th.style147 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #D8D8D8
    }

    td.style148 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    th.style148 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    td.style149 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    th.style149 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    td.style150 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: #FFFFFF
    }

    th.style150 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: #FFFFFF
    }

    td.style151 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: #FFFFFF
    }

    th.style151 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: #FFFFFF
    }

    td.style152 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: #FFFFFF
    }

    th.style152 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: #FFFFFF
    }

    td.style153 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: #FFFFFF
    }

    th.style153 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: #FFFFFF
    }

    td.style154 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    th.style154 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    td.style155 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    th.style155 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 9pt;
      background-color: white
    }

    td.style156 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    th.style156 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    td.style157 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    th.style157 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    td.style158 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    th.style158 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Cambria';
      font-size: 9pt;
      background-color: white
    }

    td.style159 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #FFFFFF
    }

    th.style159 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 7pt;
      background-color: #FFFFFF
    }

    td.style160 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style160 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style161 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 2px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #969696
    }

    th.style161 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 2px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman';
      font-size: 6pt;
      background-color: #969696
    }

    td.style162 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: white
    }

    th.style162 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 6pt;
      background-color: white
    }

    td.style163 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style163 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #FFFFFF !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    td.style164 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    th.style164 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #FFFFFF
    }

    table.sheet0 col.col0 {
      width: 27.1111108pt
    }

    table.sheet0 col.col1 {
      width: 12.87777763pt
    }

    table.sheet0 col.col2 {
      width: 12.87777763pt
    }

    table.sheet0 col.col3 {
      width: 12.87777763pt
    }

    table.sheet0 col.col4 {
      width: 12.87777763pt
    }

    table.sheet0 col.col5 {
      width: 12.87777763pt
    }

    table.sheet0 col.col6 {
      width: 12.87777763pt
    }

    table.sheet0 col.col7 {
      width: 12.87777763pt
    }

    table.sheet0 col.col8 {
      width: 12.87777763pt
    }

    table.sheet0 col.col9 {
      width: 8.13333324pt
    }

    table.sheet0 col.col10 {
      width: 17.62222202pt
    }

    table.sheet0 col.col11 {
      width: 17.62222202pt
    }

    table.sheet0 col.col12 {
      width: 17.62222202pt
    }

    table.sheet0 col.col13 {
      width: 17.62222202pt
    }

    table.sheet0 col.col14 {
      width: 17.62222202pt
    }

    table.sheet0 col.col15 {
      width: 17.62222202pt
    }

    table.sheet0 col.col16 {
      width: 17.62222202pt
    }

    table.sheet0 col.col17 {
      width: 17.62222202pt
    }

    table.sheet0 col.col18 {
      width: 17.62222202pt
    }

    table.sheet0 col.col19 {
      width: 17.62222202pt
    }

    table.sheet0 col.col20 {
      width: 52.18888829pt
    }

    table.sheet0 col.col21 {
      width: 17.62222202pt
    }

    table.sheet0 col.col22 {
      width: 17.62222202pt
    }

    table.sheet0 col.col23 {
      width: 27.1111108pt
    }

    table.sheet0 col.col24 {
      width: 27.1111108pt
    }

    table.sheet0 col.col25 {
      width: 27.1111108pt
    }

    table.sheet0 col.col26 {
      width: 17.62222202pt
    }

    table.sheet0 col.col27 {
      width: 17.62222202pt
    }

    table.sheet0 col.col28 {
      width: 17.62222202pt
    }

    table.sheet0 col.col29 {
      width: 27.1111108pt
    }

    table.sheet0 tr {
      height: 15pt
    }

    table.sheet0 tr.row0 {
      height: 9.95pt
    }

    table.sheet0 tr.row1 {
      height: 9.95pt
    }

    table.sheet0 tr.row2 {
      height: 9.95pt
    }

    table.sheet0 tr.row3 {
      height: 9.95pt
    }

    table.sheet0 tr.row4 {
      height: 9.95pt
    }

    table.sheet0 tr.row5 {
      height: 12.75pt
    }

    table.sheet0 tr.row6 {
      height: 18pt
    }

    table.sheet0 tr.row7 {
      height: 9.95pt
    }

    table.sheet0 tr.row8 {
      height: 9.95pt
    }

    table.sheet0 tr.row9 {
      height: 9.95pt
    }

    table.sheet0 tr.row10 {
      height: 9.95pt
    }

    table.sheet0 tr.row11 {
      height: 9.95pt
    }

    table.sheet0 tr.row12 {
      height: 9.95pt
    }

    table.sheet0 tr.row13 {
      height: 9.95pt
    }

    table.sheet0 tr.row14 {
      height: 9.95pt
    }

    table.sheet0 tr.row15 {
      height: 9.95pt
    }

    table.sheet0 tr.row16 {
      height: 9.95pt
    }

    table.sheet0 tr.row17 {
      height: 9.95pt
    }

    table.sheet0 tr.row18 {
      height: 9.95pt
    }

    table.sheet0 tr.row19 {
      height: 9.95pt
    }

    table.sheet0 tr.row20 {
      height: 9.95pt
    }

    table.sheet0 tr.row21 {
      height: 9.95pt
    }

    table.sheet0 tr.row22 {
      height: 9.95pt
    }

    table.sheet0 tr.row23 {
      height: 9.95pt
    }

    table.sheet0 tr.row24 {
      height: 9.95pt
    }

    table.sheet0 tr.row25 {
      height: 9.95pt
    }

    table.sheet0 tr.row26 {
      height: 9.95pt
    }

    table.sheet0 tr.row27 {
      height: 9.95pt
    }

    table.sheet0 tr.row28 {
      height: 9.95pt
    }

    table.sheet0 tr.row29 {
      height: 9.95pt
    }

    table.sheet0 tr.row30 {
      height: 9.95pt
    }

    table.sheet0 tr.row31 {
      height: 9.95pt
    }

    table.sheet0 tr.row32 {
      height: 9.95pt
    }

    table.sheet0 tr.row33 {
      height: 9.95pt
    }

    table.sheet0 tr.row34 {
      height: 20.25pt
    }

    table.sheet0 tr.row35 {
      height: 9.95pt
    }

    table.sheet0 tr.row36 {
      height: 9.95pt
    }

    table.sheet0 tr.row37 {
      height: 9.95pt
    }

    table.sheet0 tr.row38 {
      height: 9.95pt
    }

    table.sheet0 tr.row39 {
      height: 9.95pt
    }

    table.sheet0 tr.row40 {
      height: 9.95pt
    }

    table.sheet0 tr.row41 {
      height: 9.95pt
    }

    table.sheet0 tr.row42 {
      height: 9.95pt
    }

    table.sheet0 tr.row43 {
      height: 9pt
    }

    table.sheet0 tr.row44 {
      height: 9.95pt
    }

    table.sheet0 tr.row45 {
      height: 12.75pt
    }

    table.sheet0 tr.row46 {
      height: 0.75pt
    }

    table.sheet0 tr.row47 {
      height: 12pt;
      display: none;
      visibility: hidden
    }

    table.sheet0 tr.row48 {
      height: 12pt
    }

    table.sheet0 tr.row49 {
      height: 12pt
    }

    table.sheet0 tr.row50 {
      height: 12pt
    }

    table.sheet0 tr.row51 {
      height: 12pt
    }

    table.sheet0 tr.row52 {
      height: 12pt
    }

    table.sheet0 tr.row53 {
      height: 12pt
    }

    table.sheet0 tr.row54 {
      height: 29.25pt
    }
  </style>
</head>

<body>
  @foreach ($fuas as $fua)
  <br></br>

  <img src="imagen/logo.png" width="400" height="50">

  <br></br>
  <table border="0" cellpadding="4.7" cellspacing="0" id="sheet0" class="sheet0 gridlines">
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
    <col class="col13">
    <col class="col14">
    <col class="col15">
    <col class="col16">
    <col class="col17">
    <col class="col18">
    <col class="col19">
    <col class="col20">
    <col class="col21">
    <col class="col22">
    <col class="col23">
    <col class="col24">
    <col class="col25">
    <col class="col26">
    <col class="col27">
    <col class="col28">
    <col class="col29">



    <tbody>


      <tr class="row0">
        <td class="column0 style24 null"></td>
        <td class="column1 style61 null style61" colspan="22"></td>
        <td class="column23 style62 null style90" colspan="7"></td>
      </tr>
      <tr class="row1">
        <td class="column0 style33 null style33" rowspan="4"></td>
        <td class="column1 style42 null style43" colspan="12"></td>
        <td class="column13 style63 s style63" colspan="8">FORMATO DE ATENCION </td>
        <td class="column21 style43 null style91" colspan="9"></td>
      </tr>
      <tr class="row2">
        <td class="column1 style42 null style64" colspan="12"></td>
        <td class="column13 style56 s style58" colspan="8">NUMERO DE FORMATO </td>
        <td class="column21 style59 null style91" colspan="9"></td>
      </tr>
      <tr class="row3">
        <td class="column1 style42 null style60" colspan="12"></td>
        <td class="column13 style136 s style137" colspan="3">00026954</td>
        <td class="column16 style1 s">- </td>
        <td class="column17 style136 s style138" colspan="2">{{substr($fua->fecha,-2,1)}}{{substr($fua->fecha,-1,1)}}</td>
        <td class="column19 style1 s">- </td>
        <td class="column20 style139 n">
          @php
          $tamaño = 8;
          $numFua = substr(str_repeat(0, $tamaño).$fua->correlativo, - $tamaño);
          @endphp
          {{$numFua}}
        </td>
        <td class="column21 style59 null style91" colspan="9"></td>
      </tr>
      <tr class="row4">
        <td class="column1 style65 null style66" colspan="12"></td>
        <td class="column13 style49 null style49" colspan="8"></td>
        <td class="column21 style66 null style92" colspan="8"></td>
        <td class="column29 style27 null"></td>
      </tr>
      <tr class="row5">
        <td class="column0 style44 null style44" rowspan="3"></td>
        <td class="column1 style72 s style75" colspan="9">CODIGO IPRESS </td>
        <td class="column10 style72 s style75" colspan="13">NOMBRE DE IPRESS QUE REALIZA LA ATENCIÓN </td>
        <td class="column23 style93 s style94" colspan="5">RECONSIDERACIÓN (*) </td>
        <td class="column28 style95 null"></td>
        <td class="column29 style89 null style32" rowspan="52"></td>
      </tr>
      <tr class="row6">
        <td class="column1 style119 n style124" colspan="9" rowspan="2">26954</td>
        <td class="column10 style150 s style153" colspan="13" rowspan="2">{{ config('constants.CONST_clinica') }}</td>
        <!--constante nombre clinica-->
        <td class="column23 style96 s style97" colspan="6">N° FORMATO ATENCIÓN PARA RECONSIDERACIÓN </td>
      </tr>
      <tr class="row7">
        <td class="column23 style140 n style140" colspan="6"></td>
        <!--FORMATO SUB-->
      </tr>
      <tr class="row8">
        <td class="column0 style9 null"></td>
        <td class="column1 style48 null style49" colspan="8"></td>
        <td class="column9 style2 null"></td>
        <td class="column10 style49 null style49" colspan="4"></td>
        <td class="column14 style3 null"></td>
        <td class="column15 style50 null style98" colspan="14"></td>
      </tr>
      <tr class="row9">
        <td class="column0 style44 null style44" rowspan="3"></td>
        <td class="column1 style45 s style55" colspan="8"><span style="font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:5pt">FECHA DE ATENCION</span><span style="font-weight:bold; color:#000000; font-family:'Times New Roman'; font-size:6pt"> </span></td>
        <td class="column9 style51 null style52" rowspan="3"></td>
        <td class="column10 style72 s style55" colspan="4">N° HISTORIA CLINICA </td>
        <td class="column14 style51 null style52" rowspan="3"></td>
        <td class="column15 style45 s style46" colspan="8">IDENTIFICACIÓN </td>
        <td class="column23 style71 s style71" colspan="6">REGIMEN </td>
      </tr>
      <tr class="row10">
        <td class="column1 style67 s style76" colspan="2">DIA </td>
        <td class="column3 style67 s style76" colspan="2">MES </td>
        <td class="column5 style67 s style76" colspan="4">AÑO </td>
        <td class="column10 style119 n style124" colspan="4" rowspan="2">{{$fua->paciente->numHistoria}}</td>
        <td class="column15 style53 s style54" rowspan="2">TD</td>
        <td class="column16 style119 s null" rowspan="1" rowspan="2">
          @php
          $tipo = 1;
          $ini = substr($fua->paciente->dni, 0, 1);
          if($ini <> '00'){
            $tipo = 1;
          }elseif($ini =='00'){
            $tipo = 2;
          }
          @endphp
          {{$tipo}}
        </td>
        <td class="column17 style77 s style82" colspan="3" rowspan="2">N° DOCUMENTO</td>
        <td class="column20 style119 n style123" colspan="3" rowspan="2">{{$fua->paciente->dni}}</td>
        <td class="column23 style99 s style100" colspan="5">SUBSIDIADO </td>
        <td class="column28 style155 n">
          @if ($fua->paciente->regimen === 'subsidiado          ')
          X
          @elseif ($fua->regimen === 'semicontributivo    ')

          @endif
        </td>
      </tr>
      <tr class="row11">
        <td class="column1 style158 n">{{substr($fua->fecha,-10,1)}}</td>
        <td class="column2 style158 n">{{substr($fua->fecha,-9,1)}}</td>
        <td class="column3 style158 n">{{substr($fua->fecha,-7,1)}}</td>
        <td class="column4 style158 n">{{substr($fua->fecha,-6,1)}}</td>
        <td class="column5 style158 n">{{substr($fua->fecha,-4,1)}}</td>
        <td class="column6 style158 n">{{substr($fua->fecha,-3,1)}}</td>
        <td class="column7 style158 n">{{substr($fua->fecha,-2,1)}}</td>
        <td class="column8 style158 n">{{substr($fua->fecha,-1,1)}}</td>
        <td class="column16 style18 null"></td>
        <td class="column23 style73 s style69" colspan="5">SEMICONTRIBUTIVO </td>
        <td class="column28 style155 n">
          @if ($fua->regimen === 'subsidiado          ')

          @elseif ($fua->regimen === 'semicontributivo    ')
          X
          @endif


        </td>
      </tr>
      <tr class="row12">
        <td class="column0 style9 null"></td>
        <td class="column1 style48 null style49" colspan="8"></td>
        <td class="column9 style12 null"></td>
        <td class="column10 style49 null style49" colspan="4"></td>
        <td class="column14 style4 null"></td>
        <td class="column15 style49 null style49" colspan="3"></td>
        <td class="column18 style2 null"></td>
        <td class="column19 style101 null style102" colspan="3"></td>
        <td class="column22 style103 null style104" colspan="7"></td>
      </tr>
      <tr class="row13">
        <td class="column0 style44 null style44" rowspan="2"></td>
        <td class="column1 style72 s style75" colspan="17">APELLIDO PATERNO </td>
        <td class="column18 style21 null"></td>
        <td class="column19 style114 s style114" colspan="10">APELLIDO MATERNO </td>
      </tr>
      <tr class="row14">
        <td class="column1 style141 n style142" colspan="17">{{$fua->paciente->apellidoPaterno}}</td>
        <td class="column18 style105 null"></td>
        <td class="column19 style157 n style157" colspan="10">{{$fua->paciente->apellidoMaterno}}</td>
      </tr>
      <tr class="row15">
        <td class="column0 style9 null"></td>
        <td class="column1 style48 null style49" colspan="17"></td>
        <td class="column18 style8 null"></td>
        <td class="column19 style106 null style106" colspan="10"></td>
      </tr>
      <tr class="row16">
        <td class="column0 style44 null style44" rowspan="2"></td>
        <td class="column1 style72 s style75" colspan="17">PRIMER NOMBRE </td>
        <td class="column18 style21 null"></td>
        <td class="column19 style114 s style114" colspan="10">OTROS NOMBRES </td>
      </tr>
      <tr class="row17">
        <td class="column1 style141 n style142" colspan="17">{{$fua->paciente->primerNombre}}</td>
        <td class="column18 style107 null"></td>
        <td class="column19 style157 n style157" colspan="10">{{$fua->paciente->otroNombre}}</td>
      </tr>
      <tr class="row18">
        <td class="column0 style13 null"></td>
        <td class="column1 style39 null style39" colspan="17"></td>
        <td class="column18 style108 null"></td>
        <td class="column19 style109 null"></td>
        <td class="column20 style110 null style111" colspan="3"></td>
        <td class="column23 style112 null style104" colspan="6"></td>
      </tr>
      <tr class="row19">
        <td class="column0 style47 null style47" rowspan="2"></td>
        <td class="column1 style71 s style71" colspan="28">TIPO DE PRESTACION </td>
      </tr>
      <tr class="row20">
        <td class="column1 style143 s style145" colspan="16">Consulta externa</td>
        <td class="column17 style148 n">
          @if ($fua->tipoDeConsulta === 'Atencion de Procedimientos Ambulatorios')

          @elseif ($fua->tipoDeConsulta === 'Consulta Externa')
          X
          @endif



        </td>
        <td class="column18 style146 s style147" colspan="10">Atención de procedimientos ambulatorios</td>
        <td class="column28 style149 n">
          @if ($fua->tipoDeConsulta === 'Atencion de Procedimientos Ambulatorios')
          X
          @elseif ($fua->tipoDeConsulta === 'Consulta Externa')

          @endif


        </td>
      </tr>
      <tr class="row21">
        <td class="column0 style13 null"></td>
        <td class="column1 style34 null style85" colspan="28"></td>
      </tr>
      <tr class="row22">
        <td class="column0 style44 null style44" rowspan="8"></td>
        <td class="column1 style113 null"></td>
        <td class="column2 style114 s style71" colspan="27">DIAGNÓSTICOS </td>
      </tr>
      <tr class="row23">
        <td class="column1 style5 null"></td>
        <td class="column2 style128 s style130" colspan="22">DESCRIPCIÓN </td>
        <td class="column24 style128 s style129" colspan="2">CIE - 10 </td>
        <td class="column26 style117 s style117" colspan="3">TIPO Dx </td>
      </tr>
      <tr class="row24">
        <td class="column1 style6 n">1</td>
        <td class="column2 style125 s style127" colspan="22">INSUFICIENCIA RENAL CRÓNICA TERMINAL</td>
        <td class="column24 style141 s style142" colspan="2">N18</td>
        <td class="column26 style115 s">P </td>
        <td class="column27 style116 s">D </td>
        <td class="column28 style118 s">R </td>
      </tr>
      <tr class="row25">
        <td class="column1 style6 n">2</td>
        <td class="column2 style40 null style41" colspan="22"></td>
        <td class="column24 style40 null style41" colspan="2"></td>
        <td class="column26 style11 s">P </td>
        <td class="column27 style16 s">D </td>
        <td class="column28 style118 s">R </td>
      </tr>
      <tr class="row26">
        <td class="column1 style6 n">3</td>
        <td class="column2 style40 null style41" colspan="22"></td>
        <td class="column24 style40 null style41" colspan="2"></td>
        <td class="column26 style11 s">P </td>
        <td class="column27 style16 s">D </td>
        <td class="column28 style118 s">R </td>
      </tr>
      <tr class="row27">
        <td class="column1 style6 n">4</td>
        <td class="column2 style40 null style41" colspan="22"></td>
        <td class="column24 style40 null style41" colspan="2"></td>
        <td class="column26 style11 s">P </td>
        <td class="column27 style16 s">D </td>
        <td class="column28 style118 s">R </td>
      </tr>
      <tr class="row28">
        <td class="column1 style6 n">5</td>
        <td class="column2 style40 null style41" colspan="22"></td>
        <td class="column24 style40 null style41" colspan="2"></td>
        <td class="column26 style11 s">P </td>
        <td class="column27 style16 s">D </td>
        <td class="column28 style118 s">R </td>
      </tr>
      <tr class="row29">
        <td class="column1 style6 n">6</td>
        <td class="column2 style40 null style41" colspan="22"></td>
        <td class="column24 style40 null style41" colspan="2"></td>
        <td class="column26 style11 s">P </td>
        <td class="column27 style16 s">D </td>
        <td class="column28 style118 s">R </td>
      </tr>
      <tr class="row30">
        <td class="column0 style13 null"></td>
        <td class="column1 style35 null style85" colspan="28"></td>
      </tr>
      <tr class="row31">
        <td class="column0 style44 null style44" rowspan="2"></td>
        <td class="column1 style45 s style55" colspan="8">Nº DNI </td>
        <td class="column9 style45 s style46" colspan="15">NOMBRE DEL RESPONSABLE DE LA ATENCIÓN </td>
        <td class="column24 style71 s style70" colspan="5">Nº COLEGIATURA </td>
      </tr>
      <tr class="row32">
        <td class="column1 style131 n style133" colspan="8">{{$fua->profesional->dniP}}</td>
        <td class="column9 style131 n style131" colspan="15">{{$fua->profesional->primerNombreP}} {{$fua->profesional->otroNombreP}} {{$fua->profesional->apellidoPaternoP}} {{$fua->profesional->apellidoMaternoP}}</td>
        <td class="column24 style154 n style154" colspan="5">{{$fua->profesional->colegiatura}}</td>
      </tr>
      <tr class="row33">
        <td class="column0 style13 null"></td>
        <td class="column1 style39 null style39" colspan="10"></td>
        <td class="column11 style10 null"></td>
        <td class="column12 style39 null style39" colspan="12"></td>
        <td class="column24 style20 null"></td>
        <td class="column25 style85 null style85" colspan="4"></td>
      </tr>
      <tr class="row34">
        <td class="column0 style25 null"></td>
        <td class="column1 style45 s style161" colspan="9">RESPONSABLE DE LA ATENCIÓN </td>

        @switch($fua->profesional->especialidad)
        @case('Nefrologia               ')
        <td class="column10 style134 n">1</td>
        @break
        @case('Nutricion                ')
        <td class="column10 style134 n">10</td>
        @break
        @case('Psicologia               ')
        <td class="column10 style134 n">8</td>
        @break
        @case('Trabajo Social           ')
        <td class="column10 style134 n">7</td>
        @break
        @default

        @endswitch

        <td class="column11 style20 null"></td>
        <td class="column12 style71 s style71" colspan="4">ESPECIALIDAD</td>
        <td class="column16 style135 s style135" colspan="8">{{$fua->profesional->especialidad}}</td>
        <td class="column24 style20 null"></td>
        <td class="column25 style83 s style83" colspan="4" rowspan="20">Huella Digital del Asegurado o Apoderado</td>
      </tr>
      <tr class="row35">
        <td class="column0 style25 null"></td>
        <td class="column1 style34 null style34" colspan="10"></td>
        <td class="column11 style15 null"></td>
        <td class="column12 style34 null style34" colspan="12"></td>
        <td class="column24 style7 null"></td>
      </tr>
      <tr class="row36">
        <td class="column0 style19 null"></td>
        <td class="column1 style36 s style38" colspan="23">1= MÉDICO; 2=FARMACÉUTICO; 3=ODONTOLOGO; 4=BIÓLOGO; 5=OBSTETRIZ; 6= ENFERMERA; 7= TRABAJADORA SOCIAL; 8=PSICÓLOGO; 9=TECNÓLOGO MÉDICO; 10=NUTRICIONISTA; </td>
        <td class="column24 style14 null"></td>
      </tr>
      <tr class="row37">
        <td class="column0 style26 null"></td>
        <td class="column1 style163 null style101" colspan="23"></td>
        <td class="column24 style22 null"></td>
      </tr>
      <tr class="row38">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row39">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row40">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row41">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row42">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row43">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row44">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row45">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row46">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row47">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row48">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row49">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row49">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row49">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row50">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row51">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row52">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row53">
        <td class="column0 style160 null"></td>
        <td class="column1 style164 null"></td>
        <td class="column2 style164 null"></td>
        <td class="column3 style164 null"></td>
        <td class="column4 style164 null"></td>
        <td class="column5 style164 null"></td>
        <td class="column6 style164 null"></td>
        <td class="column7 style164 null"></td>
        <td class="column8 style164 null"></td>
        <td class="column9 style164 null"></td>
        <td class="column10 style164 null"></td>
        <td class="column11 style164 null"></td>
        <td class="column12 style164 null"></td>
        <td class="column13 style164 null"></td>
        <td class="column14 style164 null"></td>
        <td class="column15 style164 null"></td>
        <td class="column16 style164 null"></td>
        <td class="column17 style164 null"></td>
        <td class="column18 style164 null"></td>
        <td class="column19 style164 null"></td>
        <td class="column20 style164 null"></td>
        <td class="column21 style164 null"></td>
        <td class="column22 style164 null"></td>
        <td class="column23 style164 null"></td>
        <td class="column24 style164 null"></td>
      </tr>
      <tr class="row54">
        <td class="column0 style28 null"></td>
        <td class="column1 style159 s style159" colspan="12">Firma y Sello del Responsable de la Atención </td>
        <td class="column13 style31 null style31" colspan="5"></td>
        <td class="column18 style159 s style159" colspan="6">Firma del asegurado o apoderado </td>
        <td class="column24 style20 null"></td>
        <td class="column25 style84 null style31" colspan="4" rowspan="2"></td>
      </tr>
      <tr class="row55">
        <td class="column0 style29 null style30" colspan="25"></td>
      </tr>
      <tr class="row57">
        <td class="column0 style86 null style87" colspan="29"></td>
      </tr>
    </tbody>
  </table>
  @endforeach
</body>

</html>
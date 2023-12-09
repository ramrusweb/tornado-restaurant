$(function() {
var d = new Date()
var time = d.getHours()
if (time >= 10 && time < 16)
$("#alarm").css("display", "block")});
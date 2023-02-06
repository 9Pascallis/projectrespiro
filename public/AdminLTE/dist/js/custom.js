//tanggal waktu saat ini
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;

//Input Warna
$(document).on("click", ".button-remove", function(e) {
    e.preventDefault();  
    document.querySelectorAll(".duplicate1").length > 1 ? $(this).closest(".duplicate1").remove():'' 
                        
  });
  
  $(".btn-add1").click(function(e) {
      e.preventDefault();
      let cloned = $(".duplicate1:last").clone();
      cloned.insertBefore(this);
      cloned.find(":text").val("");
  });

//Input Warna
$(document).on("click", ".button-remove", function(e) {
    e.preventDefault();  
    document.querySelectorAll(".duplicate2").length > 1 ? $(this).closest(".duplicate2").remove():'' 
                        
  });
  
  $(".btn-add2").click(function(e) {
      e.preventDefault();
      let cloned = $(".duplicate2:last").clone();
      cloned.insertBefore(this);
      cloned.find(":text").val("");
  });

//Input Warna
$(document).on("click", ".button-remove", function(e) {
    e.preventDefault();  
    document.querySelectorAll(".duplicate3").length > 1 ? $(this).closest(".duplicate3").remove():'' 
                        
  });
  
  $(".btn-add3").click(function(e) {
      e.preventDefault();
      let cloned = $(".duplicate3:last").clone();
      cloned.insertBefore(this);
      cloned.find(":text").val("");
  });
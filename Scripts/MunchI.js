munchi={};
munchi.dockinit=function(){
$('#dock').Fisheye(
        {
          maxWidth: 12,
          items: 'a',
          itemsText: 'span',
          container: '.dock-container',
          itemWidth: 40,
          proximity: 90,
          halign : 'center'
        }
      )
      $('#dock2').Fisheye(
        {
          maxWidth: 12,
          items: 'a',
          itemsText: 'span',
          container: '.dock-container',
          itemWidth: 40,
          proximity: 80,
          alignment : 'left',
          valign: 'bottom',
          halign : 'center'
        }
      )
      $('#dock3').Fisheye(
        {
          maxWidth: 12,
          items: 'a',
          itemsText: 'span',
          container: '.dock-container',
          itemWidth: 40,
          proximity: 80,
          alignment : 'left',
          valign: 'bottom',
          halign : 'center'
        }
      )

};
munchi.init=function(){
  munchi.dockinit();
  
};
$(document).ready(munchi.init);


$(function ()
{
  $("#beranda-left a").on("click", function ()
  {
    alert(this.innerHTML);
    fetch(this.innerHTML);
  });
});

function fetch(data) 
{
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function ()
  {
    if (this.readyState == 4 && this.status == 200)
    {
      alert("fecth completed");
      $("#beranda-right .panel-heading").html(data);
      $("#beranda-right-body").html(this.responseText);
    }
  };
  xhttp.open("get", "/admin/fetch.php?" + data, true);
  xhttp.send();
}
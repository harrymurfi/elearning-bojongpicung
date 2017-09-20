function logout(user)
{
  $(function ()
  {
    if (user != null)
    {
      window.location.replace("/includes/logout.php?" + user);
    }
  });
}
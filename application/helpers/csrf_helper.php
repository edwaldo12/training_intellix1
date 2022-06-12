<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


function csrf_name()
{
  $security = new CI_Security;
  return $security->get_csrf_token_name();
}
function csrf_token()
{
  $security = new CI_Security;
  return $security->get_csrf_hash();
}

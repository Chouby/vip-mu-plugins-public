add_filter( 'shutdown', function(){
  if (extension_loaded('newrelic')) {
    newrelic_add_custom_parameter('memoryUsed', memory_get_peak_usage());//Send Memory used to NewRelic
  }
}

<?php

class GCM_CRM_Proxy
{
    /**#@+
     * @access private
     * @var string
     */
    const CRM_ADDRESS = 'https://dk.gcm.nu';
    const CRM_TOKEN = 'c0d548a585e9927b362e537e03762b0f';
    /**#@-*/

    /**
     * Gets the contents at the specified relative address
     *
     * @param string $relativeAddress
     * @param array $parameters
     * @return string The returned contents from the remote host
     */
    public function get($relativeAddress, array $parameters = array())
    {
      $arrContextOptions=array(
            "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
            ),
        );
      
        return @file_get_contents($this->getFullProxyAddress($relativeAddress, $parameters),false,stream_context_create($arrContextOptions));
    }

    /**
     * Sends a HTTP POST request to the specified relative address with the provided data
     *
     * @param string $relativeAddress
     * @param array $data
     * @return string The returned content from the remote host
     */
    public function post($relativeAddress, array $data)
    {
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
             
            ),
          "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
            )
        );

        $context  = stream_context_create($options);
        return @file_get_contents($this->getFullProxyAddress($relativeAddress), false, $context);
    }

    /**
     * Constructs the full URL for an API call with the provided relative address
     *
     * @param string $relativeAddress
     * @param array $parameters
     * @return string
     */
    protected function getFullProxyAddress($relativeAddress, array $parameters = array())
    {
        // Prepend slash if one does not already exist
        if (stripos($relativeAddress, '/') !== 0) {
            $relativeAddress = '/' . $relativeAddress;
        }

        // Add trailing slash if one does not already exist
        if (strrpos($relativeAddress, '/') !== (strlen($relativeAddress) - 1)) {
            $relativeAddress .= '/';
        }

        $query = http_build_query($parameters);
        return self::CRM_ADDRESS . $relativeAddress . self::CRM_TOKEN . (!empty($query) ? '?' . $query : '');
    }
}
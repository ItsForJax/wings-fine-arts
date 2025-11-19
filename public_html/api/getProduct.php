<?php

class Ecwid {
    private $secrets = [];
    private $storeId;
    private $token;

    public function __construct() {
        // Load .env
        $this->secrets = parse_ini_file("./.ini");

        // Assign config values
        $this->storeId = $this->secrets["STORE_ID"];
        $this->token   = $this->secrets["API_TOKEN"];
    }


    public function getProducts($page = 1, $limit = 5) {
        $offset = ($page - 1) * $limit;

        // Ask Ecwid to return only the fields we need
        $responseFields = "total,items(id,name,price,inStock,url,images(image400pxUrl,alt))";

        $url = "https://app.ecwid.com/api/v3/{$this->storeId}/products"
             . "?offset=$offset"
             . "&limit=$limit"
             . "&responseFields=total,items(id,name,price,inStock,url,media(images(image160pxUrl))";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Authorization header required for private token
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer {$this->token}"
        ]);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}

?>

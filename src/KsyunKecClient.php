<?php
namespace ksyun_sdk_kec;

use ksyun_sdk_kec\Base\V4Curl;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;

class KsyunKecClient extends V4Curl
{
//    protected $ak = null;
//    protected $sk = null;
//    protected $region = null;
//    protected $protocol = null;
//    protected $server = null;
    protected $base_url = null;
    protected $parameters = [];
    protected $region = null;
    protected $protocol = null;
    protected $server = null;
    protected $ak = null;
    protected $sk = null;

    function __construct(
        $_region,
        $_protocol,
        $_ak,
        $_sk
    ) {
        $this->stack = HandlerStack::create();
        $this->stack->push($this->replaceUri());
        $this->stack->push($this->v4Sign());

        $this->region = $_region;
        $this->parameters["region"] = $_region;
        $this->protocol = $_protocol;
        $this->parameters["protocol"] = $_protocol;
        $this->server = "kec";
        $this->parameters["server"] = "kec";
        $this->base_url = preg_replace_callback("/\{(.*?)\}/", function($matches) {
            return $this->parameters[$matches[1]];
        },"{protocol}://{server}.{region}.api.ksyun.com");
        $this->ak = $_ak;
        $this->sk = $_sk;

        $config = $this->getConfig();
        $this->client = new Client([
            'handler' => $this->stack,
            'base_uri' => $config['host'],
        ]);
    }
    protected function getConfig()
    {
        return [
            'host' => $this->base_url,
            'config' => [
                'timeout' => 5.0,
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'v4_credentials' => [
                    'region' => $this->region,
                    'service' => $this->server,
                    'ak' => $this->ak,
                    'sk' => $this->sk,
                ],
            ],
        ];
    }

    public function RunInstances($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{\"InstanceType\":\"I1.1A\"}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"RunInstances\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function StartInstances($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"StartInstances\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function StopInstances($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{\"StoppedMode\":\"KeepCharging\"}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"StopInstances\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function RebootInstances($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"RebootInstances\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function TerminateInstances($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"TerminateInstances\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function ModifyInstanceImage($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"ModifyInstanceImage\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function ModifyInstanceType($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"ModifyInstanceType\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function ModifyInstanceAttribute($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"ModifyInstanceAttribute\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function DescribeInstances($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"DescribeInstances\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function DescribeInstanceVnc($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"DescribeInstanceVnc\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function DescribeInstanceTypeConfigs($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"DescribeInstanceTypeConfigs\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function DescribeInstanceFamilys($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"DescribeInstanceFamilys\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function MonitorInstances($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"MonitorInstances\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function UnmonitorInstances($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"UnmonitorInstances\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function AttachNetworkInterface($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"AttachNetworkInterface\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function ModifyNetworkInterfaceAttribute($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"ModifyNetworkInterfaceAttribute\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function DetachNetworkInterface($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"DetachNetworkInterface\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function CreateImage($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"CreateImage\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function DescribeImages($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"DescribeImages\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function RemoveImages($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"RemoveImages\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function ModifyImageAttribute($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"ModifyImageAttribute\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function ImportImage($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"ImportImage\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function CopyImage($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"CopyImage\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function DescribeImageSharePermission($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"DescribeImageSharePermission\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function ModifyImageSharePermission($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"ModifyImageSharePermission\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function CreateLocalVolumeSnapshot($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"CreateLocalVolumeSnapshot\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function RollbackLocalVolume($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"RollbackLocalVolume\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function DescribeLocalVolumeSnapshots($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"DescribeLocalVolumeSnapshots\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function DeleteLocalVolumeSnapshot($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"DeleteLocalVolumeSnapshot\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function DescribeLocalVolumes($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"DescribeLocalVolumes\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function AttachKey($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"AttachKey\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function DetachKey($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"DetachKey\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function DescribeRegions($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"DescribeRegions\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }
    public function DescribeAvailabilityZones($_query) {

        $_url = "/";
        $_method = "get";

        $_params = [];

        $_headers = [];


        $_cookie = [];

        $_body = "";


        $_query_default = json_decode("{}", true);
        $_query = array_merge($_query_default, $_query);

        $_query = array_marge($_query, json_decode("{\"Action\":\"DescribeAvailabilityZones\",\"Version\":\"2016-03-04\"}", true));

        $_api = [
            'url' => $_url,
            'method' => $_method,
            'config' => [
                'params' => $_params,
                'headers' => $_headers,
                'query' => $_query,
                'cookie' => $_cookie,
                'body' => $_body,
            ]
        ];
        return parent::request($_api);

    }


}

<?php

namespace Webinertia\Mvc\Http;

use Laminas\Http\PhpEnvironment;

class Response extends PhpEnvironment\Response
{
    /**#@+
     *
     * @const int Status codes
     */
    public const STATUS_CODE_CUSTOM = 0;
    public const STATUS_CODE_100    = 100;
    public const STATUS_CODE_101    = 101;
    public const STATUS_CODE_102    = 102;
    public const STATUS_CODE_200    = 200;
    public const STATUS_CODE_201    = 201;
    public const STATUS_CODE_202    = 202;
    public const STATUS_CODE_203    = 203;
    public const STATUS_CODE_204    = 204;
    public const STATUS_CODE_205    = 205;
    public const STATUS_CODE_206    = 206;
    public const STATUS_CODE_207    = 207;
    public const STATUS_CODE_208    = 208;
    public const STATUS_CODE_226    = 226;
    public const STATUS_CODE_300    = 300;
    public const STATUS_CODE_301    = 301;
    public const STATUS_CODE_302    = 302;
    public const STATUS_CODE_303    = 303;
    public const STATUS_CODE_304    = 304;
    public const STATUS_CODE_305    = 305;
    public const STATUS_CODE_306    = 306;
    public const STATUS_CODE_307    = 307;
    public const STATUS_CODE_308    = 308;
    public const STATUS_CODE_400    = 400;
    public const STATUS_CODE_401    = 401;
    public const STATUS_CODE_402    = 402;
    public const STATUS_CODE_403    = 403;
    public const STATUS_CODE_404    = 404;
    public const STATUS_CODE_405    = 405;
    public const STATUS_CODE_406    = 406;
    public const STATUS_CODE_407    = 407;
    public const STATUS_CODE_408    = 408;
    public const STATUS_CODE_409    = 409;
    public const STATUS_CODE_410    = 410;
    public const STATUS_CODE_411    = 411;
    public const STATUS_CODE_412    = 412;
    public const STATUS_CODE_413    = 413;
    public const STATUS_CODE_414    = 414;
    public const STATUS_CODE_415    = 415;
    public const STATUS_CODE_416    = 416;
    public const STATUS_CODE_417    = 417;
    public const STATUS_CODE_418    = 418;
    public const STATUS_CODE_422    = 422;
    public const STATUS_CODE_423    = 423;
    public const STATUS_CODE_424    = 424;
    public const STATUS_CODE_425    = 425;
    public const STATUS_CODE_426    = 426;
    public const STATUS_CODE_428    = 428;
    public const STATUS_CODE_429    = 429;
    public const STATUS_CODE_431    = 431;
    public const STATUS_CODE_444    = 444;
    public const STATUS_CODE_451    = 451;
    // Start Custom Codes
    public const STATUS_CODE_452    = 452;
    // End Custom Codes
    public const STATUS_CODE_499    = 499;
    public const STATUS_CODE_500    = 500;
    public const STATUS_CODE_501    = 501;
    public const STATUS_CODE_502    = 502;
    public const STATUS_CODE_503    = 503;
    public const STATUS_CODE_504    = 504;
    public const STATUS_CODE_505    = 505;
    public const STATUS_CODE_506    = 506;
    public const STATUS_CODE_507    = 507;
    public const STATUS_CODE_508    = 508;
    public const STATUS_CODE_510    = 510;
    public const STATUS_CODE_511    = 511;
    public const STATUS_CODE_599    = 599;
    /**#@-*/

    /** @var array Recommended Reason Phrases */
    protected $recommendedReasonPhrases = [
        // INFORMATIONAL CODES
        100 => 'Continue',
        101 => 'Switching Protocols',
        102 => 'Processing',
        // SUCCESS CODES
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        207 => 'Multi-status',
        208 => 'Already Reported',
        226 => 'IM Used',
        // REDIRECTION CODES
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        306 => 'Switch Proxy', // Deprecated
        307 => 'Temporary Redirect',
        308 => 'Permanent Redirect',
        // CLIENT ERROR
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Time-out',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Content Too Large',
        414 => 'URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Range Not Satisfiable',
        417 => 'Expectation Failed',
        418 => 'I\'m a teapot',
        422 => 'Unprocessable Content',
        423 => 'Locked',
        424 => 'Failed Dependency',
        425 => 'Too Early',
        426 => 'Upgrade Required',
        428 => 'Precondition Required',
        429 => 'Too Many Requests',
        431 => 'Request Header Fields Too Large',
        444 => 'Connection Closed Without Response',
        451 => 'Unavailable For Legal Reasons',
        // Start Custom
        452 => 'Record Not Found',
        // End Custom
        499 => 'Client Closed Request',
        // SERVER ERROR
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version not supported',
        506 => 'Variant Also Negotiates',
        507 => 'Insufficient Storage',
        508 => 'Loop Detected',
        510 => 'Not Extended',
        511 => 'Network Authentication Required',
        599 => 'Network Connect Timeout Error',
    ];

}

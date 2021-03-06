<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [GetDatabase][google.spanner.admin.database.v1.DatabaseAdmin.GetDatabase].
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.GetDatabaseRequest</code>
 */
class GetDatabaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the requested database. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct();
    }

    /**
     * Required. The name of the requested database. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the requested database. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [ExecuteSql][google.spanner.v1.Spanner.ExecuteSql] and
 * [ExecuteStreamingSql][google.spanner.v1.Spanner.ExecuteStreamingSql].
 *
 * Generated from protobuf message <code>google.spanner.v1.ExecuteSqlRequest</code>
 */
class ExecuteSqlRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The session in which the SQL query should be performed.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     */
    private $session = '';
    /**
     * The transaction to use. If none is provided, the default is a
     * temporary read-only transaction with strong concurrency.
     *
     * Generated from protobuf field <code>.google.spanner.v1.TransactionSelector transaction = 2;</code>
     */
    private $transaction = null;
    /**
     * Required. The SQL query string.
     *
     * Generated from protobuf field <code>string sql = 3;</code>
     */
    private $sql = '';
    /**
     * The SQL query string can contain parameter placeholders. A parameter
     * placeholder consists of `'&#64;'` followed by the parameter
     * name. Parameter names consist of any combination of letters,
     * numbers, and underscores.
     * Parameters can appear anywhere that a literal value is expected.  The same
     * parameter name can be used more than once, for example:
     *   `"WHERE id > &#64;msg_id AND id < &#64;msg_id + 100"`
     * It is an error to execute an SQL query with unbound parameters.
     * Parameter values are specified using `params`, which is a JSON
     * object whose keys are parameter names, and whose values are the
     * corresponding parameter values.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 4;</code>
     */
    private $params = null;
    /**
     * It is not always possible for Cloud Spanner to infer the right SQL type
     * from a JSON value.  For example, values of type `BYTES` and values
     * of type `STRING` both appear in [params][google.spanner.v1.ExecuteSqlRequest.params] as JSON strings.
     * In these cases, `param_types` can be used to specify the exact
     * SQL type for some or all of the SQL query parameters. See the
     * definition of [Type][google.spanner.v1.Type] for more information
     * about SQL types.
     *
     * Generated from protobuf field <code>map<string, .google.spanner.v1.Type> param_types = 5;</code>
     */
    private $param_types;
    /**
     * If this request is resuming a previously interrupted SQL query
     * execution, `resume_token` should be copied from the last
     * [PartialResultSet][google.spanner.v1.PartialResultSet] yielded before the interruption. Doing this
     * enables the new SQL query execution to resume where the last one left
     * off. The rest of the request parameters must exactly match the
     * request that yielded this token.
     *
     * Generated from protobuf field <code>bytes resume_token = 6;</code>
     */
    private $resume_token = '';
    /**
     * Used to control the amount of debugging information returned in
     * [ResultSetStats][google.spanner.v1.ResultSetStats].
     *
     * Generated from protobuf field <code>.google.spanner.v1.ExecuteSqlRequest.QueryMode query_mode = 7;</code>
     */
    private $query_mode = 0;

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct();
    }

    /**
     * Required. The session in which the SQL query should be performed.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Required. The session in which the SQL query should be performed.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * The transaction to use. If none is provided, the default is a
     * temporary read-only transaction with strong concurrency.
     *
     * Generated from protobuf field <code>.google.spanner.v1.TransactionSelector transaction = 2;</code>
     * @return \Google\Spanner\V1\TransactionSelector
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * The transaction to use. If none is provided, the default is a
     * temporary read-only transaction with strong concurrency.
     *
     * Generated from protobuf field <code>.google.spanner.v1.TransactionSelector transaction = 2;</code>
     * @param \Google\Spanner\V1\TransactionSelector $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\V1\TransactionSelector::class);
        $this->transaction = $var;

        return $this;
    }

    /**
     * Required. The SQL query string.
     *
     * Generated from protobuf field <code>string sql = 3;</code>
     * @return string
     */
    public function getSql()
    {
        return $this->sql;
    }

    /**
     * Required. The SQL query string.
     *
     * Generated from protobuf field <code>string sql = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSql($var)
    {
        GPBUtil::checkString($var, True);
        $this->sql = $var;

        return $this;
    }

    /**
     * The SQL query string can contain parameter placeholders. A parameter
     * placeholder consists of `'&#64;'` followed by the parameter
     * name. Parameter names consist of any combination of letters,
     * numbers, and underscores.
     * Parameters can appear anywhere that a literal value is expected.  The same
     * parameter name can be used more than once, for example:
     *   `"WHERE id > &#64;msg_id AND id < &#64;msg_id + 100"`
     * It is an error to execute an SQL query with unbound parameters.
     * Parameter values are specified using `params`, which is a JSON
     * object whose keys are parameter names, and whose values are the
     * corresponding parameter values.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 4;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * The SQL query string can contain parameter placeholders. A parameter
     * placeholder consists of `'&#64;'` followed by the parameter
     * name. Parameter names consist of any combination of letters,
     * numbers, and underscores.
     * Parameters can appear anywhere that a literal value is expected.  The same
     * parameter name can be used more than once, for example:
     *   `"WHERE id > &#64;msg_id AND id < &#64;msg_id + 100"`
     * It is an error to execute an SQL query with unbound parameters.
     * Parameter values are specified using `params`, which is a JSON
     * object whose keys are parameter names, and whose values are the
     * corresponding parameter values.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 4;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->params = $var;

        return $this;
    }

    /**
     * It is not always possible for Cloud Spanner to infer the right SQL type
     * from a JSON value.  For example, values of type `BYTES` and values
     * of type `STRING` both appear in [params][google.spanner.v1.ExecuteSqlRequest.params] as JSON strings.
     * In these cases, `param_types` can be used to specify the exact
     * SQL type for some or all of the SQL query parameters. See the
     * definition of [Type][google.spanner.v1.Type] for more information
     * about SQL types.
     *
     * Generated from protobuf field <code>map<string, .google.spanner.v1.Type> param_types = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParamTypes()
    {
        return $this->param_types;
    }

    /**
     * It is not always possible for Cloud Spanner to infer the right SQL type
     * from a JSON value.  For example, values of type `BYTES` and values
     * of type `STRING` both appear in [params][google.spanner.v1.ExecuteSqlRequest.params] as JSON strings.
     * In these cases, `param_types` can be used to specify the exact
     * SQL type for some or all of the SQL query parameters. See the
     * definition of [Type][google.spanner.v1.Type] for more information
     * about SQL types.
     *
     * Generated from protobuf field <code>map<string, .google.spanner.v1.Type> param_types = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParamTypes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Spanner\V1\Type::class);
        $this->param_types = $arr;

        return $this;
    }

    /**
     * If this request is resuming a previously interrupted SQL query
     * execution, `resume_token` should be copied from the last
     * [PartialResultSet][google.spanner.v1.PartialResultSet] yielded before the interruption. Doing this
     * enables the new SQL query execution to resume where the last one left
     * off. The rest of the request parameters must exactly match the
     * request that yielded this token.
     *
     * Generated from protobuf field <code>bytes resume_token = 6;</code>
     * @return string
     */
    public function getResumeToken()
    {
        return $this->resume_token;
    }

    /**
     * If this request is resuming a previously interrupted SQL query
     * execution, `resume_token` should be copied from the last
     * [PartialResultSet][google.spanner.v1.PartialResultSet] yielded before the interruption. Doing this
     * enables the new SQL query execution to resume where the last one left
     * off. The rest of the request parameters must exactly match the
     * request that yielded this token.
     *
     * Generated from protobuf field <code>bytes resume_token = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setResumeToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->resume_token = $var;

        return $this;
    }

    /**
     * Used to control the amount of debugging information returned in
     * [ResultSetStats][google.spanner.v1.ResultSetStats].
     *
     * Generated from protobuf field <code>.google.spanner.v1.ExecuteSqlRequest.QueryMode query_mode = 7;</code>
     * @return int
     */
    public function getQueryMode()
    {
        return $this->query_mode;
    }

    /**
     * Used to control the amount of debugging information returned in
     * [ResultSetStats][google.spanner.v1.ResultSetStats].
     *
     * Generated from protobuf field <code>.google.spanner.v1.ExecuteSqlRequest.QueryMode query_mode = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setQueryMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Spanner\V1\ExecuteSqlRequest_QueryMode::class);
        $this->query_mode = $var;

        return $this;
    }

}


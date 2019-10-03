<?php
/**
 * Created by PhpStorm.
 * User: Y.Kalinde
 * Date: 7/7/2017
 * Time: 9:41 AM
 */

namespace TNM\OCS;


class CommandType
{
    const
        BALANCE_ENQUIRY = "Balance",
        VOUCHER_RECHARGE = "VoucherRecharge",
        BUNDLE_SUBSCRIPTION = "ChangeAccountOffer",
        ME2U = "TransferAccount",
        FAMILY_AND_FRIENDS = "ManSubFamilyNo",
        DATA_SHARING = "",
        MANAGE_DATA_SHARING_BENEFICIARIES = "ManageUserGroupMember",
        SUBSCRIBER_PLAN = "QueryCustomer",
        QUERY_SUBSCRIBE_PLAN_INFO = "QueryOfferInfo",
        SWITCH_SUBSCRIBER_PLAN = "ChangePrimaryOffer";
}

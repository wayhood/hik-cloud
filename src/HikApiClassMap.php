<?php

namespace HikCloud;

class HikApiClassMap
{
    private static $map = [
        // 授权
        'OAuth' => [
            'Token' => 'HikCloud\\RestApi\\OAuth\\Token'
        ],

        //企业内部应用开发-社区
        'Estate' => [
            // 社区管理（v1）
            'Communities' => [
                'Add' => 'HikCloud\\RestApi\\Estate\\System\\Communities\\CommunityAdd',
                'Update' => 'HikCloud\\RestApi\\Estate\\System\\Communities\\CommunityUpdate',
                'Delete' => 'HikCloud\\RestApi\\Estate\\System\\Communities\\CommunityDelete',
                'List' => 'HikCloud\\RestApi\\Estate\\System\\Communities\\CommunityList',
            ],

            //房屋管理
            'Buildings' => [
                'Add' => 'HikCloud\\RestApi\\Estate\\System\\Buildings\\BuildingAdd',
                'Delete' => 'HikCloud\\RestApi\\Estate\\System\\Buildings\\BuildingDelete',
                'List' => 'HikCloud\\RestApi\\Estate\\System\\Buildings\\BuildingList'
            ],

            //单元管理
            'Units' => [
                'Add' => 'HikCloud\\RestApi\\Estate\\System\\Units\\UnitAdd',
                'Delete' => 'HikCloud\\RestApi\\Estate\\System\\Units\\UnitDelete',
                'List' => 'HikCloud\\RestApi\\Estate\\System\\Units\\UnitList'
            ],

            //户室管理
            'Rooms' => [
                'Add' => 'HikCloud\\RestApi\\Estate\\System\\Rooms\\RoomAdd',
                'Delete' => 'HikCloud\\RestApi\\Estate\\System\\Rooms\\RoomDelete',
                'Info' => 'HikCloud\\RestApi\\Estate\\System\\Rooms\\RoomInfo',
                'InfoById' => 'HikCloud\\RestApi\\Estate\\System\\Rooms\\RoomInfoById',
                'List' => 'HikCloud\\RestApi\\Estate\\System\\Rooms\\RoomList',
                'ListByCommunityId' => 'HikCloud\\RestApi\\Estate\\System\\Rooms\\RoomCommunityList'
            ],
            
            //住户管理
            'Person'=>[
                'Add' => 'HikCloud\\RestApi\\Estate\\System\\Person\\PersonAdd',
                'Delete' => 'HikCloud\\RestApi\\Estate\\System\\Person\\PersonDelete',
                'Update' => 'HikCloud\\RestApi\\Estate\\System\\Person\\PersonUpdate',
                'CommunityAdd' => 'HikCloud\\RestApi\\Estate\\System\\Person\\PersonCommunityAdd',
                'CommunityDelete' => 'HikCloud\\RestApi\\Estate\\System\\Person\\PersonCommunityDelete',
                'RoomAdd' => 'HikCloud\\RestApi\\Estate\\System\\Person\\PersonRoomAdd',
                'RoomDelete' => 'HikCloud\\RestApi\\Estate\\System\\Person\\PersonRoomDelete',
                'RoomList' => 'HikCloud\\RestApi\\Estate\\System\\Person\\PersonRoomList',
                'InfoList' => 'HikCloud\\RestApi\\Estate\\System\\Person\\PersonInfoList'
            ],

            //物业管理
            'Property'=>[
                'Add' => 'HikCloud\\RestApi\\Estate\\System\\Property\\PropertyAdd',
                'Update' => 'HikCloud\\RestApi\\Estate\\System\\Property\\PropertyUpdate',
                'Delete' => 'HikCloud\\RestApi\\Estate\\System\\Property\\PropertyDelete',
            ],

            //访客管理
            'Visitors'=>[
                'Add' => 'HikCloud\\RestApi\\Estate\\Visitors\\VisitorAdd',
                'Delete' => 'HikCloud\\RestApi\\Estate\\Visitors\\VisitorDelete',
            ],

            //门禁
            'EntranceGuard'=>[
                'DeviceList' => 'HikCloud\\RestApi\\Estate\\EntranceGuard\\Actions\\DeviceList',
                'FaceIssued' => 'HikCloud\\RestApi\\Estate\\EntranceGuard\\Actions\\FaceIssued',
                'DeleteFaceIssued' => 'HikCloud\\RestApi\\Estate\\EntranceGuard\\Actions\\DeleteFaceIssued',
                'GateControl' => 'HikCloud\\RestApi\\Estate\\EntranceGuard\\Actions\\GateControl',
                'GetQrCode' => 'HikCloud\\RestApi\\Estate\\EntranceGuard\\Actions\\GetQrCode',
            ],

            //设备管理
            'Devices' => [
                'List' => 'HikCloud\\RestApi\\Estate\\Devices\\DeviceList',
                'ChannelList' => 'HikCloud\\RestApi\\Estate\\Devices\\DeviceChannelList',
            ],

            //卡片管理
            'Cards' => [
                'Add' => 'HikCloud\\RestApi\\Estate\\Cards\\CardAdd',
                'Open' => 'HikCloud\\RestApi\\Estate\\Cards\\CardOpen'
            ],

            // //房屋管理
            // 'Rooms' => [
            //     'CommunityRoomList' => 'HikCloud\\RestApi\\Estate\\Rooms\\CommunityRoomList',
            //     'UnitRoomList' => 'HikCloud\\RestApi\\Estate\\Rooms\\UnitRoomList',
            // ],

            // 'Units' => [
            //     'BuildingUnitList' => 'HikCloud\\RestApi\\Estate\\Units\\BuildingUnitList'
            // ],
        ],

       

        //访客管理
        'Devices'=>[
            'List' => 'HikCloud\\RestApi\\Estate\\Devices\\DeviceList',
            'OutAdd' => 'HikCloud\\RestApi\\Devices\\AddDevice',
            'OutDelete' => 'HikCloud\\RestApi\\Devices\\DeleteDevice',
            'OutList' => 'HikCloud\\RestApi\\Devices\\DeviceList',
            'OutInfo' => 'HikCloud\\RestApi\\Devices\\DeviceInfo',
            'OutUpdate' => 'HikCloud\\RestApi\\Devices\\UpdateDevice',
            'OutCount' => 'HikCloud\\RestApi\\Devices\\DeviceCount',
            'OutSetDefence' => 'HikCloud\\RestApi\\Devices\\SetDeviceDefence',
            // 视频直播
            'Live' => [
                'EncryptOff' => 'HikCloud\\RestApi\\Devices\\DeviceEncryptOff',
                'VideoOpen' => 'HikCloud\\RestApi\\Devices\\LiveVideoOpen',
                'Address' => 'HikCloud\\RestApi\\Devices\\LiveAddress',
                'AddressLimit' => 'HikCloud\\RestApi\\Devices\\LiveAddressLimit',
            ],
        ],

        

        //车辆社区管理
        'Car'=>[
            //授权
            'OAuth' => [
                'Token' => 'HikCloud\\RestApi\\OAuth\\CarToken'
            ],
            //社区
            'Community' => [
                'Add' => 'HikCloud\\RestApi\\Car\\Community\\CommunityAdd',
                'Update' => 'HikCloud\\RestApi\\Car\\Community\\CommunityUpdate',
                'Delete' => 'HikCloud\\RestApi\\Car\\Community\\CommunityDelete',
                'List' => 'HikCloud\\RestApi\\Car\\Community\\CommunityList',
                'Detail' => 'HikCloud\\RestApi\\Car\\Community\\CommunityDetail'
            ],
            //停车场
            'Park' => [
                'Add' => 'HikCloud\\RestApi\\Car\\Community\\Park\\ParkAdd',
                'Update' => 'HikCloud\\RestApi\\Car\\Community\\Park\\ParkUpdate',
                'Delete' => 'HikCloud\\RestApi\\Car\\Community\\Park\\ParkDelete',
                'List' => 'HikCloud\\RestApi\\Car\\Community\\Park\\ParkList',
            ],
            //固定车辆
            'Regulars' => [
                'Add' => 'HikCloud\\RestApi\\Car\\Community\\Regulars\\RegularsAdd',
                'Update' => 'HikCloud\\RestApi\\Car\\Community\\Regulars\\RegularsUpdate',
                'Delete' => 'HikCloud\\RestApi\\Car\\Community\\Regulars\\RegularsDelete',
                'List' => 'HikCloud\\RestApi\\Car\\Community\\Regulars\\RegularsList',
            ],
            //访客车辆
            'Visitors' => [
                'Add' => 'HikCloud\\RestApi\\Car\\Community\\Visitors\\VisitorsAdd',
                'Delete' => 'HikCloud\\RestApi\\Car\\Community\\Visitors\\VisitorsDelete',
                'List' => 'HikCloud\\RestApi\\Car\\Community\\Visitors\\VisitorsList',
            ],
            //黑名单
            'Alarms' => [
                'Add' => 'HikCloud\\RestApi\\Car\\Community\\Alarms\\AlarmsAdd',
                'Update' => 'HikCloud\\RestApi\\Car\\Community\\Alarms\\AlarmsUpdate',
                'Delete' => 'HikCloud\\RestApi\\Car\\Community\\Alarms\\AlarmsDelete',
            ]
        ],

        //停车云
        'Parking' => [
            'GetParkingInfos' => 'HikCloud\\RestApi\\Parking\\Cloud\\Service\\GetParkingInfos', //分页获取停车场
        ],

        // 通道管理
        'Channels' => [
            'List' => 'HikCloud\\RestApi\\Channels\\ChannelList',
            'Update' => 'HikCloud\\RestApi\\Channels\\UpdateChannel',
            'Osd' => 'HikCloud\\RestApi\\Channels\\ChannelOsd',
            'Capture' => 'HikCloud\\RestApi\\Channels\\ChannelCapture',
            'SynchChannels' => 'HikCloud\\RestApi\\Channels\\SynchDeviceChannels',
        ]
    ];

    /**
     * @param string $api_name
     * @return string|boolean
     */
    public static function getClassName(string $api_name)
    {
        $api_name = explode('.', $api_name);
        $api = self::$map;
        foreach ($api_name as $value) {
            if (!isset($api[$value])) {
                return false;
            }
            $api = $api[$value];
        }
        if (!is_string($api)) {
            return false;
        }
        return $api;
    }
}

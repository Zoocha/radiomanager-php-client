# BlockResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the current Block. | 
**broadcast_id** | **int** | Currently assigned Broadcast connected to the current Block, identified by the Broadcast ID. | 
**start** | [**\DateTime**](\DateTime.md) | Start of the Block (formatted as a DateTime object), saved with an TimeZone. | 
**stop** | [**\DateTime**](\DateTime.md) | End of the Block (formatted as a DateTime object), saved with an TimeZone. | 
**created_at** | [**\DateTime**](\DateTime.md) | Time of the creation of the Block (formatted as a DateTime object), saved with an TimeZone. | 
**updated_at** | [**\DateTime**](\DateTime.md) | Time of the last update of the Block (formatted as a DateTime object), saved with an TimeZone. | 
**deleted_at** | [**\DateTime**](\DateTime.md) | Moment when the Block got deleted (formatted as a DateTime object), saved with an TimeZone. | 
**items** | [**\RadioManager\RadioManagerModels\BlockRelationsItems**](BlockRelationsItems.md) |  | [optional] 
**broadcast** | [**\RadioManager\RadioManagerModels\BlockRelationsBroadcast**](BlockRelationsBroadcast.md) |  | [optional] 
**program** | [**\RadioManager\RadioManagerModels\BlockRelationsProgram**](BlockRelationsProgram.md) |  | [optional] 
**_station_id** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



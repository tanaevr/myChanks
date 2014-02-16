--------------------
myChanks
--------------------
Author: Tanaev Roman <tanaevr@gmail.com>
--------------------

Snippet call:
[[!myChanks? 
	&pageId=`[[*id]]`
	&params=`{
		"1":"chank_1",
		"2":"chank_2"
	}`
	&default_chank=`chank_0`
]]

Snippet options:
	&pageId: defined resource id,
	&params: JSON array, scheme: {"template ID":"chank name", ...}
	&default_chank: chunk name if no $params template definition. !mandatory parameter!
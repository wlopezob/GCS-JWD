/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license Modified MIT License
 * @link https://blueimp.net/ajax/
 */

// Ajax Chat language Object:
var ajaxChatLang = {
	
	login: '%s logis jutukasse.',
	logout: '%s logis jutukast välja.',
	logoutTimeout: '%s logiti jutukast välja (Aeg otsas).',
	logoutIP: '%s logiti jutukast välja (Vigane IP aadress).',
	logoutKicked: '%s logiti jutukast välja (Välja heidetud).',
	channelEnter: '%s sisenes kanalisse.',
	channelLeave: '%s lahkus kanalist.',
	privmsg: '(sosinad)',
	privmsgto: '(sosinad %s -le)',
	invite: '%s kutsub sind %s.',
	inviteto: 'Sinu kutse %s -le ühineda kanaliga %s saadeti ära.',
	uninvite: '%s palub sul lahkuda kanalist %s.',
	uninviteto: 'Sinu palve %s -le lahkuda kanalist %s saadeti ära.',	
	queryOpen: 'Privaat kanal avati %s -le.',
	queryClose: 'Privaat kanal %s -le suleti.',
	ignoreAdded: ' %s -t ignoreeritakse.',
	ignoreRemoved: ' %s ignoreerimine tühistati.',
	ignoreList: 'Ignoreeritud kasutajad:',
	ignoreListEmpty: 'Ignoreeritud kasutajad puuduvad.',
	who: 'Sisse loginud kasutajad:',
	whoChannel: 'Sisse loginud kasutajad kanalis %s:',
	whoEmpty: 'Antud kanalis sisse loginud kasutajaid ei ole.',
	list: 'Vabad kanalid:',
	bans: 'Kasutajate must nimekiri:',
	bansEmpty: 'Mustas nimekirjas kasutajaid ei ole.',
	unban: 'Kasutaja %s eemaldati mustast nimekirjast.',
	whois: 'Kasutaja %s - IP aadress:',
	whereis: 'Kasutaja %s on kanalis %s.',
	roll: '%s veeretas %s ja sai %s.',
	nick: '%s nimetas end ümber: %s.',
	toggleUserMenu: 'Näita/ära näita kasutaja menüüd',
	userMenuLogout: 'Lahku',
	userMenuWho: 'Näita sisse loginud kasutajaid',
	userMenuList: 'Näita vabad kanalid',
	userMenuAction: 'Kirjelda tegevust',
	userMenuRoll: 'Veereta täringut',
	userMenuNick: 'Muuda kasutajanimi',
	userMenuEnterPrivateRoom: 'Sisene privaat-ruumi',
	userMenuSendPrivateMessage: 'Saada privaat-sõnum',
	userMenuDescribe: 'Saada privaat-tegevus',
	userMenuOpenPrivateChannel: 'Ava privaat-kanal',
	userMenuClosePrivateChannel: 'Sulge privaat-kanal',
	userMenuInvite: 'Kutsu',
	userMenuUninvite: 'Palu lahkuda',
	userMenuIgnore: 'Ignoreeri/Tunnusta',
	userMenuIgnoreList: 'Ignoreeritud kasutajad',
	userMenuWhereis: 'Asukoha kanal',
	userMenuKick: 'Viska välja/Lisa musta nimekirja',
	userMenuBans: 'Musta nimekirja kasutajad',
	userMenuWhois: 'Näita IP-d',
	unbanUser: 'Eemalda %s mustast nimekirjast',
	joinChannel: 'Liitu kanaliga %s',
	cite: '%s ütles:',
	urlDialog: 'Palun sisesta oma veebilehe (URL):',
	deleteMessage: 'Kustuta see jutuka teade',
	deleteMessageConfirm: 'Kas tahad tõesti kustutada seda sõnumit??',
	errorCookiesRequired: 'Luba "küpsised", et kasutada seda jutukat.',
	errorUserNameNotFound: 'Viga: Kasutajat nimega %s ei leitud.',
	errorMissingText: 'Viga: Sõnumi tekst kadunud.',
	errorMissingUserName: 'Viga: Kasutajanimi puuduv.',
	errorInvalidUserName: 'Viga: Vigane kasutajanimi.',
	errorUserNameInUse: 'Viga: Kasutajanimi on juba võetud.',
	errorMissingChannelName: 'Viga: Kanali nimi on kadunud.',
	errorInvalidChannelName: 'Viga: Vigane kanali nimi: %s',
	errorPrivateMessageNotAllowed: 'Viga: Privaat-sõnumid ei ole lubatud.',
	errorInviteNotAllowed: 'Viga: Sul ei ole lubatud kutsuda kedagi siia kanalisse.',
	errorUninviteNotAllowed: 'Viga: Sul ei ole lubatud kedagi sellest kanalist lahkuma paluda.',
	errorNoOpenQuery: 'Viga: �htegi privaat-kanalit pole avatud.',
	errorKickNotAllowed: 'Viga: Sul ei ole lubatud välja visata %s.',
	errorCommandNotAllowed: 'Viga: Korraldus pole lubatud: %s',
	errorUnknownCommand: 'Viga: Tundmatu korraldus: %s',
	errorMaxMessageRate: 'Viga: Sinu maksimum sõnumite hulk, minuti vältel, on ületatud.',
	errorConnectionTimeout: 'Viga: �hendus aegus. Please proovi uuesti.',
	errorConnectionStatus: 'Viga: �henduse olek: %s',
	errorSoundIO: 'Viga: Helifaili ei õnnestunud laadida (Flash IO Viga).',
	errorSocketIO: 'Viga: �hendus socket serveriga ebaõnnestus (Flash IO Viga).',
	errorSocketSecurity: 'Viga: �hendus socket serveriga ebaõnnestus (Flash Turvalisuse Viga).',
	errorDOMSyntax: 'Viga: Vigane DOM Süntaks (DOM ID: %s).'
	
}
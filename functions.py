import re
from . import arrays

url = GET_URL

def FindTLD(url):
    return s[s.find('ebay')+4:].split('/')[0]


def readArray(url):
    tld = FindTLD(url)

    land_code = []

    switcher???

def FindSiteName(url):
    match = re.search('', url)
    return match.group(0)

def FindURLplusTLD(url):
    match = re.search('', url)
    return str.replace('www.', '', 1)

def FindURI(url):
    match = re.search('', url)
    return match.group(0)

def readArraySite(url, strip_url):
    encode = ????
    uri_encode = ???

    ebay_land_code = readArray()

    site = (FindURLplusTLD() ? FindURLplusTLD() : strip_url)

    if:
        return 'http://www.awin1.com/cread.php?awinmid=' + FindAwinMid(url) + '&awinaffid=533371&clickref=chex&p=' + encode
    elif:
        return 'http://www.anrdoezrs.net/links/8106588/type/dlg/sid/chex/' + encode
    elif:
        return 'https://t.cfjump.com/50770/t/48059?Url=' + encode + '&UniqueId=chex'
    elif:
        return 'http://booking.com?aid=1627502&label=chex'
    elif:
        return 'http://tc.tradetracker.net/?c=' + FindTradeTrackers(url) + '&m=12&a=315369&u=' + uri_encode
    elif:
        return 'https://partner.bol.com/click/click?p=2&t=url&s=51851&f=TXL&url=' + encode
    elif:
        return 'https://prf.hn/click/camref:' + FindCoolblue(url) + '/destination:' + encode
    elif:
        return url + '?TC=USD&&Utm_rid=78139600&Utm_source=affiliate'
    elif:
        return 'https://' + FindDaisySi(url)[0] + '/c/?si=' + FindDaisySi(url)[1] + '&li=' + FindDaisySi(url)[2] . '&wi=303581&ws=&dl=' + uri_encode
    elif:
        return 'http://rover.ebay.com/rover/1/' + ebay_land_code + '/1?ff3=4&pub=5575349754&toolid=11800&campid=5338219191&customid=chex&mpre=' + encode
    elif:
        return url + FindTradeTracker(url)[0] + '/?tt=' + FindTradeTracker(url)[1] + '_0_315369_'
    elif:
        return 'http://r.srvtrck.com/v1/redirect?url=' + encode + '&api_key=6192753faa5975d8d9450690274e77dd&site_id=249c53bccf944c4c8f010cf6c914f30c&type=url&source=https%3A%2F%2Fco2ok.ninja'

def SubDomein(url):
    strip_url = url
    redir_url = readArraySite(url, strip_url)
    if redir_url == True:
        return redir_url
    else:
        return readArraySite(url, FindSiteName(url))

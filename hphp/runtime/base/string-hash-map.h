/*
   +----------------------------------------------------------------------+
   | HipHop for PHP                                                       |
   +----------------------------------------------------------------------+
   | Copyright (c) 2010-present Facebook, Inc. (http://www.facebook.com)  |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
*/

#ifndef incl_HPHP_STRING_HASH_MAP_H_
#define incl_HPHP_STRING_HASH_MAP_H_

#include "hphp/runtime/base/string-functors.h"
#include "hphp/runtime/base/req-hash-map.h"

namespace HPHP {
namespace req {

// Map from case-insensitive String keys to T, with iter/ref stability
template<typename T>
using StringIMap = req::hash_map<String,T,hphp_string_hash,hphp_string_isame>;

}}
#endif

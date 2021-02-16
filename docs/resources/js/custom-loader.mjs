/*
 * Copyright (c) 2021.
 */

import path from 'path';

const ESM_WITH_JS_EXT = './MyFile.js'; // relative to loader path
const ESM_WITH_JS_EXT_URL = new URL(path.dirname(import.meta.url) + `/${ESM_WITH_JS_EXT}`).href;

export function resolve(specifier, parentModuleURL, defaultResolver) {
    const resolvedModule = defaultResolver(specifier, parentModuleURL);

    if (resolvedModule.url === ESM_WITH_JS_EXT_URL)
        resolvedModule.format = 'esm';

    return resolvedModule;
}
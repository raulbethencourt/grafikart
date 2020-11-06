/************* 
 * Try Catch * 
 *************/

var a = {};

try {
    try {
        throw new Error('error')
    } finally {
        console.log('finally');
    }
} catch (error) {
    console.log('catch');
}
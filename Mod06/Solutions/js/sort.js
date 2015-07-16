
/**
 * Appcropolis Template: autodividers 
 * @copy Appcropolis LLC (c) 2012. All rights reserved.
 * @author Raul Sanchez (support@appcropolis.com)
 * @date 2012-11-14
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, 
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS
 * BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN 
 * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN 
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE 
 * SOFTWARE.
 *
 * License and legal information: 
 *
 * http://appcropolis.com/license/
 * http://appcropolis.com/legal/
 * http://appcropolis.com/privacy/
 */


$(document).bind('pageinit', function () {
	// Find all lists that use the autodivider feature and should be sorted
    var list = $('ul[data-autodividers="true"][data-sort="true"]');
    list.each(function (i, item) {
    	var that = $(item);
        // Gel all the list items into an array (excluding te dividers)
       	var lis = that.find('li').not('.ui-li-divider').get();

        // Sort the list items alphabetically, descending
        lis.sort(function (a, b) {
            var valA = $(a).text(),
                valB = $(b).text();
            if (valA < valB) {
                return -1;
            }
            if (valA > valB) {
                return 1;
            }
            return 0;
        });

        // Remove all list items
        that.empty();

        // Rebuild the list with the ordered items
        $.each(lis, function (i, li) {
            that.append(li);
        });
        
        // Refresh/rebuild the listview
        that.listview('refresh');
    });
});
/**
 * @module tasks/statemanager/redux/slices/flows/selector
 */
jn.define('tasks/statemanager/redux/slices/flows/selector', (require, exports, module) => {
	const { sliceName, entityAdapter } = require('tasks/statemanager/redux/slices/flows/meta');

	const flowsSelector = entityAdapter.getSelectors((state) => state[sliceName]);

	const {
		selectAll,
		selectById,
		selectEntities,
		selectIds,
		selectTotal,
	} = flowsSelector;

	module.exports = {
		flowsSelector,

		selectAll,
		selectById,
		selectEntities,
		selectIds,
		selectTotal,
	};
});
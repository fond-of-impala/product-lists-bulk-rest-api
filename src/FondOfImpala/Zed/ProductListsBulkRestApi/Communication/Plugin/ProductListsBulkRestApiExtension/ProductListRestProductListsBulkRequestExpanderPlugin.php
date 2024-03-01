<?php

namespace FondOfImpala\Zed\ProductListsBulkRestApi\Communication\Plugin\ProductListsBulkRestApiExtension;

use FondOfImpala\Zed\ProductListsBulkRestApiExtension\Dependency\Plugin\RestProductListsBulkRequestExpanderPluginInterface;
use Generated\Shared\Transfer\RestProductListsBulkRequestTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \FondOfImpala\Zed\ProductListsBulkRestApi\Business\ProductListsBulkRestApiFacadeInterface getFacade()
 */
class ProductListRestProductListsBulkRequestExpanderPlugin extends AbstractPlugin implements RestProductListsBulkRequestExpanderPluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\RestProductListsBulkRequestTransfer $restProductListsBulkRequestTransfer
     *
     * @return \Generated\Shared\Transfer\RestProductListsBulkRequestTransfer
     */
    public function expand(
        RestProductListsBulkRequestTransfer $restProductListsBulkRequestTransfer
    ): RestProductListsBulkRequestTransfer {
        return $this->getFacade()->expandRestProductListsBulkRequest($restProductListsBulkRequestTransfer);
    }
}

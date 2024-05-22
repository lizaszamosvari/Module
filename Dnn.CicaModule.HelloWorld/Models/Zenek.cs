using DotNetNuke.Common.Utilities;
using DotNetNuke.ComponentModel.DataAnnotations;
using DotNetNuke.Entities.Content;
using System;
using System.Web.Caching;


namespace CicaModuleDnn.CicaModule.HelloWorld.Models
{
    [TableName("Zenelista")]
    [PrimaryKey("ZeneID", AutoIncrement = true)]
    [Cacheable("Zenelista", CacheItemPriority.Default, 20)]
    [Scope("ModuleId")]
    public class Zenelista
    {
        public int ZeneID { get; set; }
        public string Zene { get; set; }
    }
}
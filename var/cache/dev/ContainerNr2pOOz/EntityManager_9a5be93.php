<?php

namespace ContainerNr2pOOz;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere2737 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer32173 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd7a4d = [
        
    ];

    public function getConnection()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'getConnection', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'getMetadataFactory', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'getExpressionBuilder', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'beginTransaction', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'getCache', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->getCache();
    }

    public function transactional($func)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'transactional', array('func' => $func), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->transactional($func);
    }

    public function commit()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'commit', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->commit();
    }

    public function rollback()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'rollback', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'getClassMetadata', array('className' => $className), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'createQuery', array('dql' => $dql), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'createNamedQuery', array('name' => $name), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'createQueryBuilder', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'flush', array('entity' => $entity), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'clear', array('entityName' => $entityName), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->clear($entityName);
    }

    public function close()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'close', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->close();
    }

    public function persist($entity)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'persist', array('entity' => $entity), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'remove', array('entity' => $entity), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'refresh', array('entity' => $entity), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'detach', array('entity' => $entity), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'merge', array('entity' => $entity), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'getRepository', array('entityName' => $entityName), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'contains', array('entity' => $entity), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'getEventManager', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'getConfiguration', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'isOpen', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'getUnitOfWork', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'getProxyFactory', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'initializeObject', array('obj' => $obj), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'getFilters', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'isFiltersStateClean', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'hasFilters', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return $this->valueHoldere2737->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer32173 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere2737) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere2737 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere2737->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, '__get', ['name' => $name], $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        if (isset(self::$publicPropertiesd7a4d[$name])) {
            return $this->valueHoldere2737->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2737;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere2737;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2737;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere2737;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, '__isset', array('name' => $name), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2737;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere2737;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, '__unset', array('name' => $name), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2737;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere2737;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, '__clone', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        $this->valueHoldere2737 = clone $this->valueHoldere2737;
    }

    public function __sleep()
    {
        $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, '__sleep', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;

        return array('valueHoldere2737');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer32173 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer32173;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer32173 && ($this->initializer32173->__invoke($valueHoldere2737, $this, 'initializeProxy', array(), $this->initializer32173) || 1) && $this->valueHoldere2737 = $valueHoldere2737;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere2737;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere2737;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

<?php
// Copyright 2004-present Facebook. All Rights Reserved.
// This file is @generated by
// fbcode/hphp/facebook/tools/code_model/Generate.sh

namespace HH\CodeModel {

/**
 *  yield [key =>] value
 */
class YieldExpression /*implements IYieldExpression*/ {
  use Expression;
  use TypedNode;
  use Node;

  private /*?IExpression*/ $key;
  private /*?IExpression*/ $value;

  /**
   *  yield [key =>] value
   */
  public function getKey() /*: ?IExpression*/ {
    return $this->key;
  }
  /**
   *  yield [key =>] value
   */
  public function setKey(/*?IExpression*/ $value) /*: this*/ {
    $this->key = $value;
    return $this;
  }

  /**
   *  yield [key =>] value
   */
  public function getValue() /*: IExpression*/ {
    if ($this->value === null) {
      throw new \Exception("Value is not initialized");
    }
    return $this->value;
  }
  /**
   *  yield [key =>] value
   */
  public function setValue(/*IExpression*/ $value) /*: this*/ {
    $this->value = $value;
    return $this;
  }

  /**
   * Returns $visitor->visitYieldExpression($this) if
   * such a method exists on $visitor.
   * Otherwise returns $visitor->visitExpression($this) if
   * such a method exists on $visitor.
   * Otherwise returns $visitor->visitNode($this) if
   */
  public function accept(/*mixed*/ $visitor) /*: mixed*/ {
    if (method_exists($visitor, "visitYieldExpression")) {
      // UNSAFE
      return $visitor->visitYieldExpression($this);
    } else if (method_exists($visitor, "visitExpression")) {
      // UNSAFE
      return $visitor->visitExpression($this);
    } else {
      return $visitor->visitNode($this);
    }
  }

  /**
   * Yields a list of nodes that are children of this node.
   * A node has exactly one parent, so doing a depth
   * first traversal of a node graph using getChildren will
   * traverse a spanning tree.
   */
  public function getChildren() /*: Continuation<INode>*/ {
    if ($this->key !== null) {
      yield $this->key;
    }
    if ($this->value !== null) {
      yield $this->value;
    }
  }
}
}